import "bootstrap/dist/js/bootstrap";
import { loginFormAction } from "./auth/login";

const authForm_element = document.querySelector('#authForm_element');
authForm_element.addEventListener('submit', loginFormAction);