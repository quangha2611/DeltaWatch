import HEADER from "../components/header";
import BACKTOTOP from "../components/back_to_top";

const SIGN_UP = {
    init() {
        HEADER.init();
        BACKTOTOP.init();
    }
};

$(window).on("load", function() {
    SIGN_UP.init();
});
