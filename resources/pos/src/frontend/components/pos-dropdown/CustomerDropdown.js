import React, { useEffect } from "react";
import { InputGroup, Button } from "react-bootstrap-v5";
import Select from "react-select";
import { connect } from "react-redux";
import { fetchAllCustomer } from "../../../store/action/customerAction";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faUserPlus } from "@fortawesome/free-solid-svg-icons";
import { getFormattedMessage } from "../../../shared/sharedMethod";

const CustomerDropDown = (props) => {
    const {
        setSelectedCustomerOption,
        selectedCustomerOption,
        fetchAllCustomer,
        customers,
        customerModel,
    } = props;

    const customerOption =
        customers &&
        customers.map((customer) => ({
            value: customer.id,
            label: customer.attributes.name,
            name: customer.attributes.name,
            phoneNumber: customer.attributes.phone,
        }));

    useEffect(() => {
        fetchAllCustomer();
    }, []);

    const onChangeWarehouse = (obj) => {
        setSelectedCustomerOption(obj);
    };

    const filterOptions = (customer, input) => {
        if (!input) return true;
        const searchInput = input.toLowerCase();
        return (
            customer.data.name.toLowerCase().includes(searchInput) ||
            customer.data.phoneNumber?.toLowerCase().includes(searchInput)
        );
    };

    return (
        <div className="select-box col-6 pe-sm-1 position-relative">
            <InputGroup className="flex-nowrap">
                <InputGroup.Text
                    id="basic-addon1"
                    className="bg-transparent position-absolute border-0 z-index-1 input-group-text py-4 px-3"
                >
                    <i className="bi bi-person fs-2 text-gray-900" />
                </InputGroup.Text>
                <Select
                    placeholder="Choose Customer"
                    defaultValue={selectedCustomerOption}
                    value={selectedCustomerOption}
                    onChange={onChangeWarehouse}
                    options={customerOption}
                    noOptionsMessage={() =>
                        getFormattedMessage("no-option.label")
                    }
                    filterOption={filterOptions}
                />
                <Button
                    onClick={() => customerModel(true)}
                    className="position-absolute"
                >
                    <FontAwesomeIcon icon={faUserPlus} />
                </Button>
            </InputGroup>
        </div>
    );
};

const mapStateToProps = (state) => {
    const { customers } = state;
    return { customers };
};

export default connect(mapStateToProps, { fetchAllCustomer })(CustomerDropDown);
