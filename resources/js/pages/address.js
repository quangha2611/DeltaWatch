import HEADER from "../components/header";
import BACKTOTOP from "../components/back_to_top";

const ADDRESS = {
    init() {
        HEADER.init();
        BACKTOTOP.init();
    },
}

$(window).on('load', function () {
    ADDRESS.init();
})