import HEADER from "../components/header";
import BACKTOTOP from "../components/back_to_top";

const LOGIN = {
    init() {
        HEADER.init();
        BACKTOTOP.init();
    },

};

$(window).on("load", function() {
    LOGIN.init();
});
