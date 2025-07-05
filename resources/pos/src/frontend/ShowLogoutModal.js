import React from "react";
import Modal from "react-bootstrap/Modal";
import Button from "react-bootstrap/Button";
import { getFormattedMessage } from "../shared/sharedMethod";
import { useDispatch } from "react-redux";
import { useNavigate } from "react-router";
import { Tokens } from "../constants";
import { logoutAction } from "../store/action/authAction";

const ShowLogoutModal = ({
    showLogoutModal,
    setShowLogoutModal,
}) => {
    const dispatch = useDispatch();
    const navigate = useNavigate();
    const token = localStorage.getItem(Tokens.ADMIN);
    const onClickLogout = () => {
        dispatch(logoutAction(token, navigate));
        navigate("/login");
    };
    return (
        <>
            <Modal
                size="md"
                aria-labelledby="contained-modal-title-vcenter"
                centered
                show={showLogoutModal}
                onHide={() => setShowLogoutModal(false)}
            >
                <Modal.Header closeButton className="py-5 pt-5"></Modal.Header>
                <Modal.Body className="py-4">
                    <h3 className="text-center m-0">
                        {getFormattedMessage("logout.confirmation.label")}
                    </h3>
                </Modal.Body>
                <Modal.Footer className="py-4 pb-5 justify-content-center">
                    <Button className="px-11 py-3" onClick={() => onClickLogout()}>
                        {getFormattedMessage("yes.modal.title")}
                    </Button>
                    <Button
                        variant="danger"
                        className="px-11 py-3"
                        onClick={() => setShowLogoutModal(false)}
                    >
                        {getFormattedMessage("no.modal.title")}
                    </Button>
                </Modal.Footer>
            </Modal>
        </>
    );
};

export default ShowLogoutModal;
