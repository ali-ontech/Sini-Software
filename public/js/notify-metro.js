$.notify.addStyle("metro", {
    html:
        "<div style='width: 500px; padding: 10px;'>" +
            "<img src='/images/sini/SiNi_Logo.png' class='img-fluid' style='padding: 10px;'/>" +
            "<div class='text-wrapper nopadding'>" +
                "<div class='title' data-notify-html='title'/>" +
                "<div class='text' data-notify-html='text'/>" +
            "</div>" +
        "</div>",
    classes: {
        default: {
            "color": "#ffffff !important",
            "background-color": "#3f51b5",
            "border": "1px solid #3f51b5"
        },
        error: {
            "color": "#ffffff !important",
            "background-color": "#ee6e73",
            "border": "1px solid #ee6e73"
        },
        custom: {
            "color": "#ffffff !important",
            "background-color": "#3f51b5",
            "border": "1px solid #3f51b5"
        },
        success: {
            "color": "#ffffff !important",
            "background-color": "#66bb6a",
            "border": "1px solid #66bb6a"
        },
        info: {
            "color": "#ffffff !important",
            "background-color": "#29b6f6",
            "border": "1px solid #29b6f6"
        },
        warning: {
            "color": "#ffffff !important",
            "background-color": "#f7af3e",
            "border": "1px solid #f7af3e"
        },
        black: {
            "color": "#ffffff !important",
            "background-color": "#555761",
            "border": "1px solid #555761",
        },
        white: {
            "background-color": "#ffffff",
            "border": "1px solid #ddd"
        }
    }
});