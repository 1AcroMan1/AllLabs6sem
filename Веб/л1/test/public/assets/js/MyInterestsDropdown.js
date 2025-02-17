$(document).ready(function () {
    const $dropdownContainer = $("#dropdown-container");
    const $dropdownButton = $("<a>", {
        href: "MyInterests.php?controller=MyInterests&action=index",
        class: "dropbtn",
        html: "Мои интересы &#x2193"
    });
    const $dropdownContent = $("<ul>", { class: "dropdown-content" });
    const menuItems = [
        { text: "Частные", href: "MyInterests.php?controller=MyInterests&action=index#anch1" },
        { text: "Рабочие", href: "MyInterests.php?controller=MyInterests&action=index#anch2" },
        { text: "Профессиональные", href: "MyInterests.php?controller=MyInterests&action=index#anch3" },
        { text: "Прочие", href: "MyInterests.php?controller=MyInterests&action=index#anch4" },
    ];
    menuItems.forEach(item => {
        $("<li>")
            .append($("<a>", { href: item.href, text: item.text }))
            .appendTo($dropdownContent);
    });
    $dropdownContainer.append($dropdownButton, $dropdownContent);
});
