<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pokoj = $_POST["pokoj"];
    $od = $_POST["od"];
    $do = $_POST["do"];
    $zaznam = "$pokoj|$od|$do\n";
    file_put_contents("rezervace.txt", $zaznam, FILE_APPEND);
    header("Location: rezervace.php?pokoj=$pokoj");
    exit();
}

$rezervace = file_exists("rezervace.txt") ? file("rezervace.txt", FILE_IGNORE_NEW_LINES) : [];

$pokoj = isset($_GET["pokoj"]) ? $_GET["pokoj"] : 1;
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Rezervace pokojů</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="rezervace.css">
    <script src="https://kit.fontawesome.com/9b018fc7a6.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="header-contact-line">
            <div><i class="fa-solid fa-phone-volume"></i><a href="tel:606985225">606985225</a></div>
            <div><i class="fa-solid fa-envelope"></i><a href="mailto:tomasprovaznik7@seznam.cz">tomasprovaznik7@seznam.cz</a></div>
            <div><a href="">CZ</a></div>
        </div>

    <?php 
        include "navigation.php";
    ?>

    <h1>Rezervace pokojů</h1>

    <div class="menu">
        <a href="?pokoj=1" class="<?= $pokoj == 1 ? 'active' : '' ?>">Pokoj Standard</a>
        <a href="?pokoj=2" class="<?= $pokoj == 2 ? 'active' : '' ?>">Pokoj Deuxe</a>
    </div>

    <div class="pokoj-info" data-pokoj="1">
        <div>
            <img src="fotogalerie1.webp" alt="">
        </div>
        <div>
            <h1>Pokoj Standard</h1>
            <h3>Max. počet osob</h3><h3>2</h3>
            <span><i class="fa-solid fa-bed"></i>1 manželská postel</span>
            <span><i class="fa-solid fa-check"></i>2 koupelny</span>
            <span><i class="fa-solid fa-check"></i>kuchyň</span>
            <span><i class="fa-solid fa-check"></i>TV</span>
            <span><i class="fa-solid fa-check"></i>Wi-Fi zdarma</span>
            <a href="standard-pokoj.php">Zobrazit popis a vybavení</a>
        </div>
        <div>
            <h1>od<strong>990 Kč</strong></h1>
            <h3>Pokoj / noc</h3>
        </div>
    </div>

    <div class="pokoj-info" data-pokoj="2">
        <div>
            <img src="fotogalerie8.webp" alt="">
        </div>
        <div>
            <h1>Pokoj Deluxe</h1>
            <h3>Max. počet osob</h3><h3>2</h3>
            <span><i class="fa-solid fa-bed"></i>1 manželská postel</span>
            <span><i class="fa-solid fa-check"></i>sprcha</span>
            <span><i class="fa-solid fa-check"></i>kuchyň</span>
            <span><i class="fa-solid fa-check"></i>TV</span>
            <span><i class="fa-solid fa-check"></i>Wi-Fi zdarma</span>
            <a href="deluxe-pokoj.php">Zobrazit popis a vybavení</a>
        </div>
        <div>
            <h1>od<strong>1690 Kč</strong></h1>
            <h3>Pokoj / noc</h3>
        </div>
    </div>


    <div class="calendar-wrapper">
    <div>
        <div class="calendar-controls">
            <button onclick="changeMonth(-1)">&#8592;</button>
            <span id="monthYear1"></span>
        </div>
        <div id="calendar1" class="calendar"></div>
    </div>
    <div>
        <div class="calendar-controls">
            <button onclick="changeMonth(1)">&#8594;</button>
            <span id="monthYear2"></span>
        </div>
        <div id="calendar2" class="calendar"></div>
    </div>
</div>

<form method="post" id="reservationForm" style="display:none;">
    <input type="hidden" name="pokoj" value="<?= $pokoj ?>">
    <input type="hidden" name="od" id="od">
    <input type="hidden" name="do" id="do">
    <button type="submit">Rezervovat</button>
</form>

<?php 
    include "footer.php";

?>

<script>
const obsazeneTerminy = <?= json_encode($rezervace) ?>;
const pokoj = <?= $pokoj ?>;
let selectedOd = null;
let selectedDo = null;
let selectedDates = [];

let today = new Date();
let month1 = today.getMonth();
let year1 = today.getFullYear();
let month2 = (today.getMonth() + 1) % 12;
let year2 = today.getFullYear();
if (month2 === 0) year2++;

const calendar1 = document.getElementById("calendar1");
const calendar2 = document.getElementById("calendar2");
const monthYear1 = document.getElementById("monthYear1");
const monthYear2 = document.getElementById("monthYear2");

function parseReservedDates() {
    let terminy = [];
    obsazeneTerminy.forEach(zaznam => {
        const [p, od, doD] = zaznam.split("|");
        if (parseInt(p) === pokoj) {
            let datum = new Date(od);
            let doDatum = new Date(doD);
            while (datum <= doDatum) {
                terminy.push(formatDate(datum));
                datum.setDate(datum.getDate() + 1);
            }
        }
    });
    return terminy;
}

const reservedDates = parseReservedDates();

function renderCalendar(month, year, calendarElem, monthYearElem) {
    calendarElem.innerHTML = "";
    const firstDay = new Date(year, month).getDay();
    const daysInMonth = new Date(year, month + 1, 0).getDate();
    monthYearElem.textContent = `${year} / ${month + 1}`;

    let date = 1;

    for (let i = 0; i < 6; i++) {
        const row = document.createElement("div");
        row.classList.add("calendar-row");

        for (let j = 0; j < 7; j++) {
            const cell = document.createElement("div");
            cell.classList.add("calendar-cell");

            if (i === 0 && j < (firstDay || 7) - 1) {
                cell.classList.add("empty");
                row.appendChild(cell);
            } else if (date > daysInMonth) {
                break;
            } else {
                const datum = new Date(year, month, date);
                const datumStr = formatDate(datum);

                if (reservedDates.includes(datumStr)) {
                    cell.classList.add("reserved");
                } else {
                    cell.textContent = date;
                    if (selectedDates.includes(datumStr)) {
                        cell.classList.add("selected");
                    }
                    cell.addEventListener("click", () => toggleSelectDate(datumStr));
                }
                row.appendChild(cell);
                date++;
            }
        }
        calendarElem.appendChild(row);
    }
}

function toggleSelectDate(datumStr) {
    if (!selectedDates.includes(datumStr)) {
        selectedDates.push(datumStr);
        selectedDates.sort();
        if (selectedDates.length >= 2) {
            // před vyplněním ověřím, jestli tam není obsazený den
            if (isRangeAvailable(selectedDates[0], selectedDates[selectedDates.length-1])) {
                fillBetweenDates(selectedDates[0], selectedDates[selectedDates.length-1]);
            } else {
                alert("Ve vybraném rozmezí je již obsazený termín. Vyber jiný rozsah.");
                selectedDates = [datumStr];
            }
        }
    } else {
        selectedDates.sort();
        const index = selectedDates.indexOf(datumStr);
        selectedDates = selectedDates.slice(0, index + 1);
    }

    if (selectedDates.length >= 2) {
        document.getElementById("od").value = selectedDates[0];
        document.getElementById("do").value = selectedDates[selectedDates.length-1];
        document.getElementById("reservationForm").style.display = "block";
    } else {
        document.getElementById("reservationForm").style.display = "none";
    }

    refreshCalendars();
}

function fillBetweenDates(start, end) {
    let startDate = new Date(start);
    let endDate = new Date(end);
    selectedDates = [];
    while (startDate <= endDate) {
        selectedDates.push(formatDate(startDate));
        startDate.setDate(startDate.getDate() + 1);
    }
}

function isRangeAvailable(start, end) {
    let startDate = new Date(start);
    let endDate = new Date(end);
    const today = new Date();
    today.setHours(0,0,0,0);

    while (startDate <= endDate) {
        const datumStr = formatDate(startDate);
        if (startDate < today || reservedDates.includes(datumStr)) {
            return false;
        }
        startDate.setDate(startDate.getDate() + 1);
    }
    return true;
}



function formatDate(d) {
    let month = "" + (d.getMonth() + 1);
    let day = "" + d.getDate();
    const year = d.getFullYear();
    if (month.length < 2) month = "0" + month;
    if (day.length < 2) day = "0" + day;
    return [year, month, day].join("-");
}

function refreshCalendars() {
    renderCalendar(month1, year1, calendar1, monthYear1);
    renderCalendar(month2, year2, calendar2, monthYear2);
}

function changeMonth(delta) {
    month1 += delta;
    month2 += delta;
    if (month1 < 0) { month1 = 11; year1--; }
    if (month1 > 11) { month1 = 0; year1++; }
    if (month2 < 0) { month2 = 11; year2--; }
    if (month2 > 11) { month2 = 0; year2++; }

    refreshCalendars();
}

function showSelectedPokoj() {
    document.querySelectorAll(".pokoj-info").forEach(el => {
        el.style.display = "none";
    });
    document.querySelector(`.pokoj-info[data-pokoj="${pokoj}"]`).style.display = "flex";
    document.getElementById("calendar-wrapper").style.display = "block";

}

document.querySelectorAll('.menu a').forEach(button => {
    button.addEventListener('click', function(e) {
        const url = new URL(this.href);
        const pokoj = url.searchParams.get("pokoj");

        document.querySelectorAll(".pokoj-info").forEach(el => {
            el.style.display = "none";
        });

        document.querySelector(`.pokoj-info[data-pokoj="${pokoj}"]`).style.display = "block";

        document.getElementById("calendar-wrapper").style.display = "block";
    });
});


refreshCalendars();
showSelectedPokoj();

</script>

<script src="navbar.js"></script>