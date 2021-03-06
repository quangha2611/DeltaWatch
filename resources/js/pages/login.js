import HEADER from "../components/header";
import BACKTOTOP from "../components/back_to_top";

const PRODUCT_DETAIL = {
    init() {
        HEADER.init();
        BACKTOTOP.init();
    },

};

$(window).on("load", function() {
    PRODUCT_DETAIL.init();
});
