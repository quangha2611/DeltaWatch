import HEADER from "../components/header";
import BACKTOTOP from "../components/back_to_top";

const INDEX = {
    init() {
        HEADER.init();
        BACKTOTOP.init();
    },

};

$(window).on("load", function() {
    INDEX.init();
});
