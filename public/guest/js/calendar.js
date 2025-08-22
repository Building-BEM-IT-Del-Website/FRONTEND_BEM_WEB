class ImprovedCalendar {
  constructor() {
    this.currentDate = new Date()
    this.today = new Date()
    this.selectedDate = new Date()
    this.monthNames = [
      "Januari",
      "Februari",
      "Maret",
      "April",
      "Mei",
      "Juni",
      "Juli",
      "Agustus",
      "September",
      "Oktober",
      "November",
      "Desember",
    ]
    this.dayNames = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"]

    this.init()
  }

  init() {
    this.render()
    this.bindEvents()
    this.updateTime()
    this.updateTodayDisplay()

    // Update time every minute
    setInterval(() => {
      this.updateTime()
    }, 60000)
  }

  bindEvents() {
    // Navigation buttons
    document.getElementById("prevBtn").addEventListener("click", () => {
      this.currentDate.setMonth(this.currentDate.getMonth() - 1)
      this.render()
    })

    document.getElementById("nextBtn").addEventListener("click", () => {
      this.currentDate.setMonth(this.currentDate.getMonth() + 1)
      this.render()
    })

    document.getElementById("todayBtn").addEventListener("click", () => {
      this.currentDate = new Date()
      this.selectedDate = new Date()
      this.render()
      this.updateTodayDisplay()
    })

    // View buttons functionality
    document.querySelectorAll(".view-btn").forEach((btn) => {
      btn.addEventListener("click", (e) => {
        document.querySelectorAll(".view-btn").forEach((b) => b.classList.remove("active"))
        e.target.classList.add("active")

        // Add view switching logic here if needed
        const view = e.target.dataset.view
        console.log(`[v0] Switched to ${view} view`)
      })
    })

    // Action buttons
    document.getElementById("printBtn").addEventListener("click", () => {
      window.print()
    })

    document.getElementById("subscribeBtn").addEventListener("click", () => {
      this.showNotification("Fitur favorit berhasil diaktifkan!", "success")
    })
  }

  render() {
    this.renderHeader()
    this.renderCalendar()
  }

  renderHeader() {
    const monthYear = document.getElementById("monthYear")
    monthYear.textContent = `${this.monthNames[this.currentDate.getMonth()]} ${this.currentDate.getFullYear()}`
  }

  renderCalendar() {
    const calendarBody = document.getElementById("calendarBody")
    calendarBody.innerHTML = ""

    const year = this.currentDate.getFullYear()
    const month = this.currentDate.getMonth()

    // First day of the month and last day of the month
    const firstDay = new Date(year, month, 1)
    const lastDay = new Date(year, month + 1, 0)

    // Start from Sunday of the week containing the first day
    const startDate = new Date(firstDay)
    startDate.setDate(startDate.getDate() - firstDay.getDay())

    // Generate 6 weeks (42 days)
    for (let week = 0; week < 6; week++) {
      const row = document.createElement("tr")

      for (let day = 0; day < 7; day++) {
        const cell = document.createElement("td")
        const cellDate = new Date(startDate)
        cellDate.setDate(startDate.getDate() + week * 7 + day)

        cell.textContent = cellDate.getDate()
        cell.dataset.date = cellDate.toISOString().split("T")[0]

        // Check if date is in current month
        if (cellDate.getMonth() !== month) {
          cell.classList.add("other-month")
        }

        // Check if date is today
        if (this.isSameDay(cellDate, this.today)) {
          cell.classList.add("today")
        }

        // Check if date is selected
        if (this.isSameDay(cellDate, this.selectedDate)) {
          cell.classList.add("selected")
        }

        // Add click event for date selection
        cell.addEventListener("click", () => {
          if (!cell.classList.contains("other-month")) {
            // Remove previous selection
            document.querySelectorAll(".calendar-table td.selected").forEach((td) => {
              td.classList.remove("selected")
            })

            // Add selection to clicked date
            cell.classList.add("selected")
            this.selectedDate = new Date(cellDate)
            this.updateSelectedDateDisplay()
          }
        })

        row.appendChild(cell)
      }

      calendarBody.appendChild(row)
    }
  }

  updateTodayDisplay() {
    const todayElement = document.getElementById("todayDate")
    const today = new Date()
    const dayName = this.dayNames[today.getDay()]
    const date = today.getDate()
    const month = this.monthNames[today.getMonth()]
    const year = today.getFullYear()

    todayElement.textContent = `${dayName}, ${date} ${month} ${year}`
  }

  updateSelectedDateDisplay() {
    const selectedElement = document.getElementById("selectedDateDisplay")
    const dayName = this.dayNames[this.selectedDate.getDay()]
    const date = this.selectedDate.getDate()
    const month = this.monthNames[this.selectedDate.getMonth()]
    const year = this.selectedDate.getFullYear()

    selectedElement.innerHTML = `Dipilih: <span>${dayName}, ${date} ${month} ${year}</span>`
  }

  updateTime() {
    const timeElement = document.getElementById("currentTime")
    const now = new Date()
    const timeString = now.toLocaleTimeString("id-ID", {
      hour: "2-digit",
      minute: "2-digit",
      second: "2-digit",
    })
    timeElement.textContent = `Waktu: ${timeString}`
  }

  isSameDay(date1, date2) {
    return (
      date1.getDate() === date2.getDate() &&
      date1.getMonth() === date2.getMonth() &&
      date1.getFullYear() === date2.getFullYear()
    )
  }

  showNotification(message, type = "info") {
    // Create notification element
    const notification = document.createElement("div")
    notification.className = `notification ${type}`
    notification.textContent = message

    // Style the notification
    Object.assign(notification.style, {
      position: "fixed",
      top: "20px",
      right: "20px",
      padding: "12px 20px",
      borderRadius: "8px",
      color: "white",
      fontWeight: "500",
      zIndex: "1000",
      transform: "translateX(100%)",
      transition: "transform 0.3s ease",
    })

    // Set background color based on type
    const colors = {
      success: "#10b981",
      error: "#ef4444",
      info: "#3b82f6",
    }
    notification.style.background = colors[type] || colors.info

    // Add to DOM and animate in
    document.body.appendChild(notification)
    setTimeout(() => {
      notification.style.transform = "translateX(0)"
    }, 100)

    // Remove after 3 seconds
    setTimeout(() => {
      notification.style.transform = "translateX(100%)"
      setTimeout(() => {
        document.body.removeChild(notification)
      }, 300)
    }, 3000)
  }
}

// Initialize calendar when DOM is loaded
document.addEventListener("DOMContentLoaded", () => {
  new ImprovedCalendar()
})
