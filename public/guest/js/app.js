// Inisialisasi AOS (Animasi Scroll)
AOS.init({ duration: 800, once: true, offset: 100 });

// Fungsi Kalender Utama untuk halaman /kalender
function mainCalendar() {
    return {
        currentMonth: new Date().getMonth() + 1,
        currentYear: new Date().getFullYear(),
        
        // Data event lengkap dari PDF Anda
        events: [
            // November 2024
            { date: '2024-11-09', title: 'Workshop Arduino UNO (HME)', category: 'HIMAPRO' },
            { date: '2024-11-16', title: 'Sharing Knowledge (HIMASTI)', category: 'HIMAPRO' },
            { date: '2024-11-18', title: 'Pembuatan Kalender KM (DPDK)', category: 'UKM' },
            { date: '2024-11-22', title: 'Elektro Movie Night (HME)', category: 'HIMAPRO' },
            { date: '2024-11-23', title: 'Elektro Day Sport (HME)', category: 'HIMAPRO' },
            { date: '2024-11-23', title: 'Melekat (HIMATOR)', category: 'HIMAPRO' },
            { date: '2024-11-28', title: 'Kolaborasi E-sport (HME)', category: 'HIMAPRO' },
            { date: '2024-11-30', title: 'Kaderisasi (HIMAMERA)', category: 'HIMAPRO' },
            // Desember 2024
            { date: '2024-12-05', title: 'Pembekalan Softskill (KEASRAMAAN)', category: 'KEASRAMAAN' },
            { date: '2024-12-06', title: 'Pembubaran Panitia PCA (DPDK)', category: 'UKM' },
            { date: '2024-12-14', title: 'Kurve Massal (KEASRAMAAN)', category: 'KEASRAMAAN' },
            // Januari 2025
            { date: '2025-01-14', title: 'Perwalian Awal Semester', category: 'KEMAHASISWAAN' },
            { date: '2025-01-18', title: 'Ibadah Natal Ephipani', category: 'KEASRAMAAN' },
            { date: '2025-01-31', title: 'Rapat Koordinasi MPM & DPDK', category: 'MPM' },
            // Februari 2025
            { date: '2025-02-01', title: 'PRIMA (BEM)', category: 'BEM' },
            // ... Terus tambahkan semua event dari PDF Anda di sini
        ],
        // Kategori ini akan memberikan kelas warna pada tanggal
        categories: {
            'BEM': 'day-bem',
            'MPM': 'day-mpm',
            'HIMAPRO': 'day-himapro',
            'UKM': 'day-ukm',
            'KEASRAMAAN': 'day-keasramaan',
            'KEMAHASISWAAN': 'day-kemahasiswaan',
        },
        selectedDate: null,
        activeFilter: 'all',
        
        get calendarGrid() {
            const firstDay = new Date(this.currentYear, this.currentMonth - 1, 1).getDay();
            const numDays = new Date(this.currentYear, this.currentMonth, 0).getDate();
            const blankDays = Array(firstDay).fill(null);
            const daysInMonth = Array.from({ length: numDays }, (_, i) => i + 1);
            const allCells = [...blankDays, ...daysInMonth];
            const weeks = [];
            for (let i = 0; i < allCells.length; i += 7) {
                weeks.push(allCells.slice(i, i + 7));
            }
            return weeks;
        },

        prevMonth() {
            if (this.currentMonth === 1) { this.currentMonth = 12; this.currentYear--; } 
            else { this.currentMonth--; }
            this.selectedDate = null;
        },
        nextMonth() {
            if (this.currentMonth === 12) { this.currentMonth = 1; this.currentYear++; }
            else { this.currentMonth++; }
            this.selectedDate = null;
        },
        get monthName() {
            return new Date(this.currentYear, this.currentMonth - 1).toLocaleString('id-ID', { month: 'long' });
        },
        
        // --- LOGIKA UNTUK STYLING & INTERAKSI ---
        isToday(day) {
            const today = new Date();
            return day === today.getDate() && this.currentMonth === today.getMonth() + 1 && this.currentYear === today.getFullYear();
        },
        hasEvent(day) {
            if (!day) return false;
            const dateStr = `${this.currentYear}-${String(this.currentMonth).padStart(2, '0')}-${String(day).padStart(2, '0')}`;
            const eventsOnDay = this.events.filter(e => e.date === dateStr);
            if (this.activeFilter === 'all') {
                return eventsOnDay.length > 0;
            }
            return eventsOnDay.some(e => e.category === this.activeFilter);
        },
        getEventCategory(day) {
            if (!day) return '';
            const dateStr = `${this.currentYear}-${String(this.currentMonth).padStart(2, '0')}-${String(day).padStart(2, '0')}`;
            const event = this.events.find(e => e.date === dateStr);
            return event ? this.categories[event.category] : '';
        },
        selectDate(day) {
            if (!day) return;
            const dateStr = `${this.currentYear}-${String(this.currentMonth).padStart(2, '0')}-${String(day).padStart(2, '0')}`;
            this.selectedDate = this.hasEvent(day) ? dateStr : null;
        },
        isSelected(day) {
            if (!day) return false;
            const dateStr = `${this.currentYear}-${String(this.currentMonth).padStart(2, '0')}-${String(day).padStart(2, '0')}`;
            return this.selectedDate === dateStr;
        },
        formatEventDate(dateStr) {
            return new Date(dateStr).toLocaleDateString('id-ID', { day: 'numeric', month: 'long' });
        },
        setFilter(category) {
            this.activeFilter = category;
            this.selectedDate = null;
        },
        get filteredAgenda() {
            return this.events
                .filter(event => {
                    const eventDate = new Date(event.date);
                    const monthMatch = eventDate.getMonth() + 1 === this.currentMonth;
                    const yearMatch = eventDate.getFullYear() === this.currentYear;
                    const categoryMatch = this.activeFilter === 'all' || event.category === this.activeFilter;
                    return monthMatch && yearMatch && categoryMatch;
                })
                .sort((a, b) => new Date(a.date) - new Date(b.date));
        },
        get selectedDayAgenda() {
            if (!this.selectedDate) return [];
            return this.events.filter(e => e.date === this.selectedDate);
        }
    }
}
window.mainCalendar = mainCalendar; // Gunakan nama baru agar tidak konflik