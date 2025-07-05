import React, { useState } from "react";
import { Form, Modal } from "react-bootstrap-v5";
import { connect } from "react-redux";
import { onChangePassword } from "../../../store/action/changePasswordAction";
import {
    getFormattedMessage,
    placeholderText,
} from "../../../shared/sharedMethod";
import { faEye, faEyeSlash } from "@fortawesome/free-solid-svg-icons";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";

const ChangePassword = (props) => {
    const { deleteModel, onClickDeleteModel, onChangePassword } = props;
    const [showPassword, setShowPassword] = useState({
        cuurent: false,
        new: false,
        confirm: false,
    });
    const [passwordInputs, setPasswordInputs] = useState({
        current_password: "",
        new_password: "",
        confirm_password: "",
    });

    const [errors, setErrors] = useState({
        current_password: "",
        new_password: "",
        confirm_password: "",
    });

    const handleChangePassword = (e) => {
        setPasswordInputs((inputs) => ({
            ...inputs,
            [e.target.name]: e.target.value,
        }));
    };

    const handleValidation = () => {
        let errorss = {};
        let isValid = false;
        if (!passwordInputs["current_password"]) {
            errorss["current_password"] = getFormattedMessage(
                "change-password.input.current.validate.label"
            );
        } else if (!passwordInputs["new_password"]) {
            errorss["new_password"] = getFormattedMessage(
                "change-password.input.new.validate.label"
            );
        } else if (!passwordInputs["confirm_password"]) {
            errorss["confirm_password"] = getFormattedMessage(
                "change-password.input.confirm.validate.label"
            );
        } else if (
            passwordInputs["confirm_password"] !==
            passwordInputs["confirm_password"]
        ) {
            errorss["confirm_password"] = getFormattedMessage(
                "change-password.input.confirm.valid.validate.label"
            );
        } else {
            isValid = true;
        }
        setErrors(errorss);
        return isValid;
    };

    const onSubmit = (e) => {
        e.preventDefault();
        const valid = handleValidation();
        if (valid) {
            onChangePassword(passwordInputs);
            setPasswordInputs(passwordInputs);
            onClickDeleteModel(false);
        }
    };
    const handleHideShowPassword = (type) => {
        if (type === "current") {
            setShowPassword({
                ...showPassword,
                cuurent: !showPassword.cuurent,
            });
        } else if (type === "new") {
            setShowPassword({ ...showPassword, new: !showPassword.new });
        } else if (type === "confirm") {
            setShowPassword({
                ...showPassword,
                confirm: !showPassword.confirm,
            });
        }
    };

    return (
        <Modal
            show={deleteModel}
            onHide={() => onClickDeleteModel(false)}
            keyboard={true}
            onShow={() => {
                document.getElementById("formBasicCurrent_password").focus();
            }}
        >
            <Form
                onKeyPress={(e) => {
                    if (e.key === "Enter") {
                        onSubmit(e);
                    }
                }}
            >
                <Modal.Header closeButton>
                    <Modal.Title>
                        {getFormattedMessage(
                            "header.profile-menu.change-password.label"
                        )}
                    </Modal.Title>
                </Modal.Header>
                <Modal.Body>
                    <div className="row">
                        <div className="col-md-12 mb-5">
                            <label className="form-label">
                                {getFormattedMessage(
                                    "change-password.input.current.label"
                                )}
                                :
                            </label>
                            <span className="required" />
                            <div className="input-group">
                                <input
                                    id="formBasicCurrent_password"
                                    type={
                                        showPassword.cuurent
                                            ? "text"
                                            : "password"
                                    }
                                    name="current_password"
                                    placeholder={placeholderText(
                                        "change-password.input.current.placeholder.label"
                                    )}
                                    autoComplete="off"
                                    className="form-control"
                                    onChange={(e) => handleChangePassword(e)}
                                    value={passwordInputs.current_password}
                                />
                                <span
                                    className="showpassword"
                                    onClick={() =>
                                        handleHideShowPassword("current")
                                    }
                                >
                                    <FontAwesomeIcon
                                        icon={showPassword.cuurent ? faEye : faEyeSlash}
                                        className="top-0 m-0 fa"
                                    />
                                </span>
                            </div>
                            <span className="text-danger d-block fw-400 fs-small mt-2">
                                {errors["current_password"]
                                    ? errors["current_password"]
                                    : null}
                            </span>
                        </div>
                        <div className="col-md-12 mb-5">
                            <label className="form-label">
                                {getFormattedMessage(
                                    "change-password.input.new.label"
                                )}
                                :
                            </label>
                            <span className="required" />
                            <div className="input-group">
                                <input
                                    type={
                                        showPassword.new ? "text" : "password"
                                    }
                                    name="new_password"
                                    placeholder={placeholderText(
                                        "change-password.input.new.placeholder.label"
                                    )}
                                    autoComplete="off"
                                    className="form-control"
                                    onChange={(e) => handleChangePassword(e)}
                                    value={passwordInputs.new_password}
                                />
                                <span
                                    className="showpassword"
                                    onClick={() =>
                                        handleHideShowPassword("new")
                                    }
                                >
                                    <FontAwesomeIcon
                                        icon={showPassword.new ? faEye : faEyeSlash}
                                        className="top-0 m-0 fa"
                                    />
                                </span>
                            </div>
                            <span className="text-danger d-block fw-400 fs-small mt-2">
                                {errors["new_password"]
                                    ? errors["new_password"]
                                    : null}
                            </span>
                        </div>
                        <div className="col-md-12">
                            <label className="form-label">
                                {getFormattedMessage(
                                    "change-password.input.confirm.label"
                                )}
                                :
                            </label>
                            <span className="required" />
                            <div className="input-group">
                            <input
                                 type={
                                    showPassword.confirm ? "text" : "password"
                                }
                                name="confirm_password"
                                placeholder={placeholderText(
                                    "change-password.input.confirm.placeholder.label"
                                )}
                                autoComplete="off"
                                className="form-control"
                                onChange={(e) => handleChangePassword(e)}
                                value={passwordInputs.confirm_password}
                                />
                             <span
                                    className="showpassword"
                                    onClick={() =>
                                        handleHideShowPassword("confirm")
                                    }
                                    >
                                    <FontAwesomeIcon
                                        icon={showPassword.confirm ? faEye : faEyeSlash}
                                        className="top-0 m-0 fa"
                                        />
                                </span>
                                </div>
                            <span className="text-danger d-block fw-400 fs-small mt-2">
                                {errors["confirm_password"]
                                    ? errors["confirm_password"]
                                    : null}
                            </span>
                        </div>
                    </div>
                </Modal.Body>
            </Form>
            <Modal.Footer children="justify-content-start" className="pt-0">
                <button
                    type="button"
                    className="btn btn-primary m-0"
                    onClick={(event) => onSubmit(event)}
                >
                    {placeholderText("globally.save-btn")}
                </button>
                <button
                    type="button"
                    className="btn btn-secondary my-0 ms-5 me-0"
                    data-bs-dismiss="modal"
                    onClick={() => onClickDeleteModel(false)}
                >
                    {getFormattedMessage("globally.cancel-btn")}
                </button>
            </Modal.Footer>
        </Modal>
    );
};

export default connect(null, { onChangePassword })(ChangePassword);
