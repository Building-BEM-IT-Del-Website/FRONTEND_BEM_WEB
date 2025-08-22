@extends('guess.components.app')

@section('content')

<section class="py-5 bg-del-light-gray" x-data="mainCalendar()">
    <div class="container">
        <!-- Header Halaman -->
        <div class="text-center mb-5" data-aos="fade-up">
            <h1 class="display-4 fw-bold text-del-dark">Kalender Kegiatan</h1>
            <p class="lead text-muted">Navigasi dan temukan semua agenda penting Keluarga Mahasiswa IT Del.</p>
        </div>

        <div class="card shadow-sm border-0" data-aos="fade-up">
            <div class="card-body p-4">
                <!-- Legenda (Filter Interaktif) -->
                <div class="d-flex flex-wrap justify-content-center gap-2 mb-4 legend-list">
                    <div @click="setFilter('all')" class="legend-item" :class="{'active': activeFilter === 'all'}" style="background-color: #f8f9fa;">Semua</div>
                    <div @click="setFilter('BEM')" class="legend-item" :class="{'active': activeFilter === 'BEM'}" style="background-color: #FEFFB2;">BEM</div>
                    <div @click="setFilter('MPM')" class="legend-item" :class="{'active': activeFilter === 'MPM'}" style="background-color: #ADD8E6;">MPM</div>
                    <div @click="setFilter('HIMAPRO')" class="legend-item" :class="{'active': activeFilter === 'HIMAPRO'}" style="background-color: #B2DFDB;">Himapro</div>
                    <div @click="setFilter('UKM')" class="legend-item" :class="{'active': activeFilter === 'UKM'}" style="background-color: #FFB6C1;">UKM</div>
                    <div @click="setFilter('KEASRAMAAN')" class="legend-item" :class="{'active': activeFilter === 'KEASRAMAAN'}" style="background-color: #90EE90;">Keasramaan</div>
                    <div @click="setFilter('KEMAHASISWAAN')" class="legend-item" :class="{'active': activeFilter === 'KEMAHASISWAAN'}" style="background-color: #48D1CC;">Kemahasiswaan</div>
                </div>

                <div class="row g-5">
                    <!-- Kolom Kalender Utama -->
                    <div class="col-lg-8">
                        <div class="calendar-main-header">
                            <div class="nav-buttons"><button @click="prevMonth()" class="btn btn-outline-primary rounded-circle"><i class="bi bi-chevron-left"></i></button></div>
                            <h2 class="mb-0" x-text="monthName + ' ' + currentYear"></h2>
                            <div class="nav-buttons"><button @click="nextMonth()" class="btn btn-outline-primary rounded-circle"><i class="bi bi-chevron-right"></i></button></div>
                        </div>
                        <table class="calendar-table-modern">
                            <thead><tr><th>SUN</th><th>MON</th><th>TUE</th><th>WED</th><th>THU</th><th>FRI</th><th>SAT</th></tr></thead>
                            <tbody>
                                <template x-for="week in calendarGrid" :key="week">
                                    <tr>
                                        <template x-for="day in week" :key="day">
                                            <td x-text="day" @click="selectDate(day)"
                                                :class="{
                                                    'blank': !day,
                                                    'today': isToday(day),
                                                    'selected': isSelected(day),
                                                    ... (day && hasEvent(day) ? { [getEventCategory(day)]: true } : {})
                                                }">
                                            </td>
                                        </template>
                                    </tr>
                                </template>
                            </tbody>
                        </table>
                    </div>

                    <!-- Kolom Sidebar Agenda -->
                    <div class="col-lg-4">
                        <div class="sidebar-widget">
                            <h5 class="widget-title" x-show="!selectedDate">Agenda Bulan Ini</h5>
                            <h5 class="widget-title" x-show="selectedDate">Agenda Tanggal <span x-text="new Date(selectedDate).getDate()"></span></h5>
                            <div class="list-group list-group-flush agenda-list">
                                <!-- Tampilan jika tidak ada tanggal yang dipilih -->
                                <template x-if="!selectedDate">
                                    <template x-for="event in filteredAgenda" :key="event.date + event.title">
                                        <a href="#" @click.prevent="selectDate(new Date(event.date).getDate())" class="list-group-item list-group-item-action">
                                            <strong class="d-block" x-text="event.title"></strong>
                                            <small class="text-muted" x-text="formatEventDate(event.date)"></small>
                                        </a>
                                    </template>
                                    <template x-if="filteredAgenda.length === 0">
                                        <p class="text-muted small p-2">Tidak ada agenda untuk bulan ini.</p>
                                    </template>
                                </template>
                                <!-- Tampilan jika ada tanggal yang dipilih -->
                                <template x-if="selectedDate">
                                    <template x-for="event in selectedDayAgenda" :key="event.date + event.title">
                                        <div class="list-group-item">
                                            <strong class="d-block" x-text="event.title"></strong>
                                            <span class="badge" :class="categories[event.category].replace('day-', 'bg-')" x-text="event.category"></span>
                                        </div>
                                    </template>
                                </template>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
