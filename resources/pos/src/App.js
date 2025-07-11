import React, { useEffect, useState } from "react";
import { Route, useLocation, Navigate, Routes, useNavigate } from "react-router-dom";
import "../../pos/src/assets/sass/style.react.scss";
import { useDispatch, useSelector } from "react-redux";
import { IntlProvider } from "react-intl";
import { settingsKey, Tokens } from "./constants";
import Toasts from "./shared/toast/Toasts";
import { fetchFrontSetting } from "./store/action/frontSettingAction";
import { fetchConfig } from "./store/action/configAction";
import { addRTLSupport } from "./shared/sharedMethod";
import Login from "./components/auth/Login";
import ResetPassword from "./components/auth/ResetPassword";
import ForgotPassword from "./components/auth/ForgotPassword";
import AdminApp from "./AdminApp";
import { getFiles } from "./locales/index";
import Cookies from "js-cookie";

function App() {
    //do not remove updateLanguag
    const dispatch = useDispatch();
    const { updateLanguage } = useSelector((state) => state);
    const location = useLocation();
    const token = Cookies.get("authToken");
    const navigate = useNavigate()
    const updatedLanguage = localStorage.getItem(Tokens.UPDATED_LANGUAGE);
    const { selectedLanguage, config, language } = useSelector(
        (state) => state
    );
    const [allLocales, setAllLocales] = useState({});
    const [messages, setMessages] = useState({});
    const [userEditedMessage, setUserEditedMessage] = useState({});
    const updateLanguag =
        allLocales[updatedLanguage ? updatedLanguage : selectedLanguage];
    const [languageData, setLanguageData] = useState([]);

    const permissionMappings = {
        manage_dashboard: "/app/dashboard",
        manage_roles: "/app/roles",
        manage_brands: "/app/brands",
        manage_warehouses: "/app/warehouses",
        manage_units: "/app/units",
        manage_product_categories: "/app/product-categories",
        manage_products: "/app/products",
        manage_suppliers: "/app/suppliers",
        manage_customers: "/app/customers",
        manage_users: "/app/users",
        manage_purchase: "/app/purchases",
        manage_pos_screen: "/app/pos",
        manage_sale: "/app/sales",
        manage_print_barcode: "/app/print/barcode",
        manage_adjustments: "/app/adjustments",
        manage_quotations: "/app/quotations",
        manage_transfers: "/app/transfers",
        manage_expenses: "/app/expenses",
        manage_currency: "/app/currencies",
        manage_variations: "/app/variations",
        manage_expense_categories: "/app/expense-categories",
        manage_setting: "/app/settings",
        manage_purchase_return: "/app/purchase-return",
        manage_sale_return: "/app/sale-return",
        manage_report: "/app/report/report-warehouse",
        manage_language: "/app/languages",
    };

    const mapPermissionToRoute = (permission) => {
        const permissionKey = permission.toLowerCase();
        if (permissionMappings.hasOwnProperty(permissionKey)) {
            return permissionMappings[permissionKey];
        } else {
            const entity = permissionKey.split("_").slice(1).join("-");
            return `/app/${entity}`;
        }
    };

    const [mappedRoutes, setMappedRoutes] = useState([]);
    const [redirectTo, setRedirectTo] = useState("");
    useEffect(() => {
        setMappedRoutes(config.map(mapPermissionToRoute));
    }, [config]);
    useEffect(() => {
        if (mappedRoutes && mappedRoutes.length > 0) {
            if (config.includes("manage_dashboard")) {
                setRedirectTo("/app/dashboard");
            } else if (config.includes("manage_sale")) {
                setRedirectTo("/app/sales");
            }
             else if(mappedRoutes.length === 1 && config.includes("manage_pos_screen")){
                setRedirectTo("/app/pos");
            }
             else {
                const currentPath = window.location.hash;
                const targetPath = mappedRoutes[0];
                if (currentPath === `#${targetPath}`) {
                    setRedirectTo(mappedRoutes[1]);
                } else {
                    setRedirectTo(mappedRoutes[0]);
                }
            }
        } else {
            setRedirectTo("/app/dashboard");
        }
    }, [mappedRoutes]);

    useEffect(() => {
        const getData = getFiles();
        setAllLocales(getData);
    }, [language, updateLanguage?.lang_json_array]);

    useEffect(() => {
        if (updateLanguage?.iso_code === updatedLanguage && languageData) {
            setUserEditedMessage(updateLanguage?.lang_json_array);
        }
    }, [language, languageData]);

    // updated language hendling
    useEffect(() => {
        if (Object.values(userEditedMessage).length !== 0) {
            setMessages(userEditedMessage);
        } else {
            if (updateLanguage?.iso_code === updatedLanguage) {
                const updateLanguages = updateLanguage?.lang_json_array;
                setMessages(updateLanguages);
            } else {
                if (
                    updateLanguag === undefined ||
                    updateLanguag === null ||
                    updateLanguag === ""
                ) {
                    const defaultUpdateLanguage = allLocales["en"];
                    setMessages(defaultUpdateLanguage);
                } else {
                    if (updateLanguag === undefined || updateLanguag === null) {
                        const defaultUpdateLanguage = allLocales["en"];
                        setMessages(defaultUpdateLanguage);
                    } else {
                        setMessages(updateLanguag);
                    }
                }
            }
        }
    }, [allLocales, updateLanguage?.lang_json_array]);

    useEffect(() => {
        selectCSS();
    }, [location.pathname]);

    useEffect(() => {
        const currentPath = location.pathname;
        if (token) {
            dispatch(fetchConfig());
            dispatch(fetchFrontSetting());
        } else if (!currentPath.includes("/forgot-password") && !currentPath.includes("/reset-password")) {
            navigate("/login");
        }
    }, []);

    const selectCSS = () => {
        if (updatedLanguage === "ar") {
            require("./assets/css/custom.rtl.css");
            require("./assets/css/style.rtl.css");
            require("./assets/css/frontend.rtl.css");
        } else {
            require("./assets/css/custom.css");
            require("./assets/css/style.css");
            require("./assets/css/frontend.css");
        }
    };

    useEffect(() => {
        addRTLSupport(updatedLanguage ? updatedLanguage : selectedLanguage);
    }, [updatedLanguage, selectedLanguage]);

    return (
        <div className="d-flex flex-column flex-root">
            <IntlProvider
                locale={settingsKey.DEFAULT_LOCALE}
                messages={messages}
            >
                <Routes>
                    <Route path="/login" element={<Login />} />
                    <Route
                        path="reset-password/:token/:email"
                        element={<ResetPassword />}
                    />
                    <Route
                        path="forgot-password"
                        element={<ForgotPassword />}
                    />
                    <Route
                        path="app/*"
                        element={<AdminApp config={config} />}
                    />
                    <Route
                        path="/"
                        element={
                            <Navigate
                                replace
                                to={token ? redirectTo : "/login"}
                            />
                        }
                    />
                    <Route path="*" element={<Navigate replace to={"/"} />} />
                </Routes>
                <Toasts
                    language={
                        updatedLanguage ? updatedLanguage : selectedLanguage
                    }
                />
            </IntlProvider>
        </div>
    );
}

export default App;
