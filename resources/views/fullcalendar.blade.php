@extends('layouts.admin-nodashboard')
@section('header')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{--
    <link rel="stylesheet" href="{{ asset('assets/js/vendor/fullcalendar/fullcalendar.css') }}">
    --}}
    {{--
    <link rel="stylesheet" href="{{ asset('js/fullcalendar/lib/main.css') }}"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@5.3.2/main.min.css" />

@endsection
@section('content')
    <div class="page page-calendar">
        <!-- bradcome -->
        <div class="b-b mb-10">
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <h3 class="h3 m-0">1.8 ระบบจัดการเว็บ</h3>
                    <small class="text-muted">1.8.2 จัดการกิจกรรม</small>
                </div>
                <div class="btn-group pull-right">
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{ route('root') }}"><i class="fa fa-home"></i></a>
                        </li>
                        <li>
                            <a href="{{ route('admin') }}">1.8 ระบบจัดการเว็บ</a>
                        </li>
                        <li>
                            <a href="{{ url('fullcalendar') }}">1.8.2 จัดการกิจกรรม</a>
                        </li>
                        <li class="active">1.8.2.1 รายการกิจกรรม</li>
                    </ol>
                </div>
            </div>
        </div>

        <div class="col-lg-12 col-md-12">
            <div class="boxs">
                <div class="boxs-header">
                    <h3 class="custom-font hb-amber">
                        <strong>รายการกิจกรรม </strong></h3>
                </div>
                <!-- right side -->
                <div class="tcol">
                    <!-- right side body -->
                    <div class="p-15">
                        {{-- <button class="btn btn-raised btn-success btn-sm mr-5"
                            id="change-view-today">วันนี้</button>
                        <button class="btn btn-raised btn-default btn-sm mr-5" id="change-view-day">รายวัน</button>
                        <button class="btn btn-raised btn-default btn-sm mr-5" id="change-view-week">รายสัปดาห์</button>
                        <button class="btn btn-raised btn-default btn-sm mr-5" id="change-view-month">รายเดือน</button>
                        --}}

                        <div id='calendar'></div>
                    </div>
                    <!-- /right side body -->
                </div>
                <!-- /right side -->
            </div>
        </div>
    </div>
@endsection
@section('footer')
    {{-- <script src="{{ asset('assets/bundles/fullcalendarscripts.bundle.js') }}"></script>
    --}}
    {{-- <script src="{{ asset('js/fullcalendar/lib/main.js') }}"></script>
    <script src="{{ asset('js/fullcalendar/lib/locales-all.js') }}"></script> --}}

@endsection
@section('footer-script')
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.3.2/main.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@5.3.2/locales-all.min.js"></script>
    {{-- <script src="{{ asset('assets/js/page/calendar.js') }}"></script>
    --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var SITEURL = "{{ url('/') }}";
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            var initialLocaleCode = 'th';
            var calendarEl = document.getElementById('calendar');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
                },
                initialDate: '2020-09-12',
                locale: initialLocaleCode,
                buttonIcons: false, // show the prev/next text
                weekNumbers: true,
                navLinks: true, // can click day/week names to navigate views
                editable: true,
                dayMaxEvents: true, // allow "more" link when too many events
                events: SITEURL + "fullcalendar",
                displayEventTime: true,
                eventRender: function(event, element, view) {
                    if (event.allDay === 'true') {
                        event.allDay = true;
                    } else {
                        event.allDay = false;
                    }
                },
                selectable: true,
                selectHelper: true,
                select: function(start, end, allDay) {
                    var title = prompt('Event Title:');
                    if (title) {
                        var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
                        var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
                        $.ajax({
                            url: SITEURL + "fullcalendar/create",
                            data: 'title=' + title + '&amp;start=' + start + '&amp;end=' + end,
                            type: "POST",
                            success: function(data) {
                                displayMessage("Added Successfully");
                            }
                        });
                        calendar.fullCalendar('renderEvent', {
                                title: title,
                                start: start,
                                end: end,
                                allDay: allDay
                            },
                            true
                        );
                    }
                    calendar.fullCalendar('unselect');
                },
                eventDrop: function(event, delta) {
                    var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
                    var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
                    $.ajax({
                        url: SITEURL + 'fullcalendar/update',
                        data: 'title=' + event.title + '&amp;start=' + start + '&amp;end=' +
                            end + '&amp;id=' + event.id,
                        type: "POST",
                        success: function(response) {
                            displayMessage("Updated Successfully");
                        }
                    });
                },
                eventClick: function(event) {
                    var deleteMsg = confirm("Do you really want to delete?");
                    if (deleteMsg) {
                        $.ajax({
                            type: "POST",
                            url: SITEURL + 'fullcalendar/delete',
                            data: "&amp;id=" + event.id,
                            success: function(response) {
                                if (parseInt(response) > 0) {
                                    $('#calendar').fullCalendar('removeEvents', event.id);
                                    displayMessage("Deleted Successfully");
                                }
                            }
                        });
                    }
                }
                /*
                events: [{
                        title: 'All Day Event',
                        start: '2020-09-01'
                    },
                    {
                        title: 'Long Event',
                        start: '2020-09-07',
                        end: '2020-09-10'
                    },
                    {
                        groupId: 999,
                        title: 'Repeating Event',
                        start: '2020-09-09T16:00:00'
                    },
                    {
                        groupId: 999,
                        title: 'Repeating Event',
                        start: '2020-09-16T16:00:00'
                    },
                    {
                        title: 'Conference',
                        start: '2020-09-11',
                        end: '2020-09-13'
                    },
                    {
                        title: 'Meeting',
                        start: '2020-09-12T10:30:00',
                        end: '2020-09-12T12:30:00'
                    },
                    {
                        title: 'Lunch',
                        start: '2020-09-12T12:00:00'
                    },
                    {
                        title: 'Meeting',
                        start: '2020-09-12T14:30:00'
                    },
                    {
                        title: 'Happy Hour',
                        start: '2020-09-12T17:30:00'
                    },
                    {
                        title: 'Dinner',
                        start: '2020-09-12T20:00:00'
                    },
                    {
                        title: 'Birthday Party',
                        start: '2020-09-13T07:00:00'
                    },
                    {
                        title: 'Click for Google',
                        url: 'http://google.com/',
                        start: '2020-09-28'
                    }
                ]
                */
            });

            calendar.render();

        });

        function displayMessage(message) {
            $(".response").html("<div class='success'>" + message + "</div>");
            setInterval(function() {
                $(".success").fadeOut();
            }, 1000);
        }

    </script>
@endsection
