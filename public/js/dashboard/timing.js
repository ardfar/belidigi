var today = new Date();
var hari;
const harihari = ["Ahad", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu"];
var targetLanguage;
var targetTime;
var nextPrayerName;
const TIME_LIMIT = 30;
let timerPassed = 0;
let timerLeft = TIME_LIMIT;
let timerInterval = null;
var timerMnt;
var timerDtk;
const FULL_DASH_ARRAY = 283;
const WARNING_THRESHOLD = 10;
const ALERT_THRESHOLD = 5;
const COLOR_CODES = {
    info: {
      color: "green"
    },
    warning: {
      color: "orange",
      threshold: WARNING_THRESHOLD
    },
    alert: {
      color: "red",
      threshold: ALERT_THRESHOLD
    }
  };

function startTime() {
    var today = new Date();
    const dateResmi = new Date('September 1, 2021, 21:10:00 GMT+7:00');
    const bulanbulan = ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];
    let jam = today.getHours();
    let mnt = today.getMinutes();
    let dtk = today.getSeconds();
    let tanggal = today.getDate();
    let tahun = today.getFullYear()
    jam = cekDigit(jam);
    mnt = cekDigit(mnt);
    dtk = cekDigit(dtk);
    hari = harihari[today.getDay()];
    bulan = bulanbulan[today.getMonth()];
    var diffTime = new Date(today.getTime() - dateResmi.getTime());
    fullDate = hari + ", " + tanggal + " " + bulan + " " + tahun ;
    if (document.getElementById('fullDatePlaceholder')){
        document.getElementById('fullDatePlaceholder').innerHTML = fullDate;
        document.getElementById('jamPlaceholder').innerHTML = jam;
        document.getElementById('menitPlaceholder').innerHTML = mnt;
        document.getElementById('detikPlaceholder').innerHTML = dtk;
    };
}
function cekDigit(i) {
    if (i < 10) {i = "0" + i};
    return i;
};
setInterval(startTime, 1000);

      let remainingPathColor = COLOR_CODES.info.color;
      function calculateTimeFraction() {
        return timerLeft / TIME_LIMIT;
      }
       
    //   remainingPathColor
      function setRemainingPathColor(timerLeft) {
        const { alert, warning, info } = COLOR_CODES;
        if (timerLeft <= alert.threshold) {
          document.getElementById("base-timer-path-remaining").classList.remove(warning.color);
          document.getElementById("base-timer-path-remaining").classList.add(alert.color);
        } else if (timerLeft <= warning.threshold) {
          document.getElementById("base-timer-path-remaining").classList.remove(info.color);
          document.getElementById("base-timer-path-remaining").classList.add(warning.color);
        }
    }
      function setCircleDasharray() {
        const circleDasharray = `${(
          calculateTimeFraction() * FULL_DASH_ARRAY
        ).toFixed(0)} 283`;
        document.getElementById("base-timer-path-remaining").setAttribute("stroke-dasharray", circleDasharray);
      }