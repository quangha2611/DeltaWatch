import HEADER from "../components/header";
import BACKTOTOP from "../components/back_to_top";

const ABOUT_US = {
    init() {
        HEADER.init();
        BACKTOTOP.init();
    },
}

$(window).on('load', function () {
    ABOUT_US.init();
})