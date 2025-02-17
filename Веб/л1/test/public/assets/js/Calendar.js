$(document).ready(function () {
    const $dateInput = $("#date");
    const $calendarContainer = $("#calendar-container");
    const $selMonth = $("<select></select>");
    const $selYear = $("<select></select>");
    const $divDays = $("<div></div>");

    function initCalendar() {
        const days30 = ["Апрель", "Июнь", "Сентябрь", "Ноябрь"];
        const days31 = ["Январь", "Март", "Май", "Июль", "Август", "Октябрь", "Декабрь"];

        $.each([...days31, "Февраль", ...days30], (index, month) => {
            $selMonth.append($("<option></option>").val(index).text(month));
        });

        const currentYear = new Date().getFullYear();
        for (let i = currentYear; i >= 1950; i--) {
            $selYear.append($("<option></option>").val(i).text(i));
        }

        $calendarContainer.append($selMonth, $selYear, $divDays);

        $selMonth.on("change", populateDays);
        $selYear.on("change", populateDays);
    }

    function populateDays() {
        const selectedMonth = parseInt($selMonth.val(), 10);
        const selectedYear = parseInt($selYear.val(), 10);
        const daysInMonth = new Date(selectedYear, selectedMonth + 1, 0).getDate();
        const firstDayOfMonth = new Date(selectedYear, selectedMonth, 1).getDay();

        $divDays.empty();

        for (let i = 0; i < firstDayOfMonth; i++) {
            $divDays.append(
                $("<div></div>").css({
                    display: "inline-block",
                    width: "12%"
                })
            );
        }

        let dayCounter = 1;
        const daysInRow = 7;

        while (dayCounter <= daysInMonth) {
            const $rowDiv = $("<div></div>").css({
                display: "flex",
                flexWrap: "wrap"
            });

            for (let i = 0; i < daysInRow && dayCounter <= daysInMonth; i++) {
                const $dayButton = $("<button></button>")
                    .text(dayCounter++)
                    .addClass("day-button")
                    .css({
                        flex: "1 0 12%",
                        height: "40px",
                        margin: "2px",
                        textAlign: "center",
                        backgroundColor: "#e0e0e0",
                        border: "1px solid #ccc",
                        borderRadius: "4px"
                    })
                    .on("click", function () {
                        $dateInput.val(`${$(this).text()}.${selectedMonth + 1}.${selectedYear}`);
                        $calendarContainer.addClass("hidden");
                    });

                $rowDiv.append($dayButton);
            }

            $divDays.append($rowDiv);
        }
    }

    $dateInput.on("click", function () {
        $calendarContainer.toggleClass("hidden");
        if (!$calendarContainer.hasClass("hidden")) {
            populateDays();
        }
    });

    $(document).on("click", function (event) {
        if (!$calendarContainer.is(event.target) && $calendarContainer.has(event.target).length === 0 && !$dateInput.is(event.target)) {
            $calendarContainer.addClass("hidden");
        }
    });

    initCalendar();
});
