const js_list = ".js-list";
const js_title = ".js-title";
const js_content = ".js-content";

document.addEventListener("DOMContentLoaded", () => {
    setUpAccordion();
});

const setUpAccordion = () => {
    const lists = document.querySelectorAll(js_list);
    const RUNNING_VALUE = "running";
    const IS_OPENED_CLASS = "is-opened";

    lists.forEach((element) => {
        const title = element.querySelector(js_title);
        const content = element.querySelector(js_content);

        title.addEventListener("click", (event) => {
            event.preventDefault();
            if (element.dataset.animStatus === RUNNING_VALUE) {
                return;
            }

            if (element.open) {
                element.classList.toggle(IS_OPENED_CLASS);
                const closingAnim = content.animate(closingAnimKeyframes(content), animTiming);
                element.dataset.animStatus = RUNNING_VALUE;
                closingAnim.onfinish = () => {
                    element.removeAttribute("open");
                    element.dataset.animStatus = "";
                };
            } else {
                element.setAttribute("open", "true");
                element.classList.toggle(IS_OPENED_CLASS);
                const openingAnim = content.animate(openingAnimKeyframes(content), animTiming);
                element.dataset.animStatus = RUNNING_VALUE;
                openingAnim.onfinish = () => {
                    element.dataset.animStatus = "";
                };
            }
        });
    });
}
const animTiming = {
    duration: 200,
    easing: "ease-out"
};
const closingAnimKeyframes = (content) => [
    {
        height: content.offsetHeight + 'px',
        opacity: 1,
    }, {
        height: 0,
        opacity: 0,
    }
];

const openingAnimKeyframes = (content) => [
    {
        height: 0,
        opacity: 0,
    }, {
        height: content.offsetHeight + 'px',
        opacity: 1,
    }
];


