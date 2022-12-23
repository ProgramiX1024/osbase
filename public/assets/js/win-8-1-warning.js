const div = document.getElementById("win-8-1-warning")
const date = new Date()

const year = date.getFullYear()
var month = date.getMonth()
const day = date.getDate()

// var month = month+1

// const endSupportDate = "10.01.2023"
// const actualDate = day.toString() + "." + month.toString() + "." + year.toString()

// console.log(actualDate)

if(year <= 2023) {
    if(month >= 0) {
        if(day < 10) {
            div.innerHTML = '<div class="mt-4 alert alert-dismissible alert-warning"><button type="button" class="btn-close" data-bs-dismiss="alert"></button><h4 class="alert-heading">Koniec wsparcia Windows 8.1</h4><p class="mb-0">Niedługo zakończy się wsparcie dla systemu Windows 8.1! <a href="/timers" class="alert-link" target="_blanK">Sprawdź, ile jeszcze czasu zostało</a></p></div>'
        } else if(day == 10) {
            div.innerHTML = '<div class="mt-4 alert alert-dismissible alert-danger"><button type="button" class="btn-close" data-bs-dismiss="alert"></button><h4 class="alert-heading">Koniec wsparcia Windows 8.1</h4><p class="mb-0">Dzisiaj zakończyło się wsparcie techniczne dla Windows 8.1. Zdecydowanie zalecamy aktualizację systemu do Windows 10 lub przejście na system Linux. W przypadku chęci migracji na Windowsa 11 zalecamy kupno nowego komputera.</p></div>'
        }
    }
}