<?php
    include("../tailwind_css/adminheader2.php");
?>
<div class=" mx-3 sidebar">
    <ul class="sidebar-menu">
	<li><i class="fa-solid fa-table-columns"></i><a href="#" onclick="showContent('dashboard-overview')">Dashboard Overview</a></li>
        <li><i class="fa-solid fa-car"></i><a href="#" onclick="showContent('vehicle-management')">Vehicle Management</a></li>
        <li><i class="fa-solid fa-receipt"></i><a href="#" onclick="showContent('booking-management')">Booking Management</a></li>
        <li><i class="fa-brands fa-intercom"></i><a href="#" onclick="showContent('customer-management')">Customer Management</a></li>
        <li><i class="fa-solid fa-money-bill"></i><a href="#" onclick="showContent('payment-management')">Payment Management</a></li>
        <li><i class="fa-solid fa-chart-simple"></i><a href="#" onclick="showContent('reporting-analytics')">Reporting and Analytics</a></li>
        <li><i class="fa-solid fa-gear"></i><a href="#" onclick="showContent('settings-configuration')">Settings and Configuration</a></li>
        <li><i class="fa-brands fa-servicestack"></i><a href="#" onclick="showContent('maintenance-service')">Maintenance and Service</a></li>
        <li><i class="fa-solid fa-circle-info"></i><a href="#" onclick="showContent('support-help')">Support and Help</a></li>
        <li><i class="fa-solid fa-shield-halved"></i><a href="#" onclick="showContent('security-access')">Security and Access Control</a></li>
    </ul>	
</div>


          <!------------- midcontent display-hide script section start ---------->

<script>
    function showContent(contentId) {
        var contentElements = document.querySelectorAll('.midcontent > div');
        contentElements.forEach(function(element) {
            element.style.display = 'none';
        });

        var selectedContent = document.querySelector('.' + contentId);
        if (selectedContent) {
            selectedContent.style.display = 'block';
        }
    }

    function showDashboardOverview() {
        showContent('dashboard-overview');
    }

    window.onload = showDashboardOverview;
</script>

              <!------------- midcontent display-hide script section end ---------->


<!-- Calender -->
<div class="calendar-toggle" onclick="toggleCalendar()">
<i class="fa-solid fa-calendar-alt" id="calendar-toggle-icon"></i>
</div> 

<script src="js/calenderpop.js"></script>

<div class="container">
      <div class="calendar" id="calendar">
        <div class="header">
          <div class="month"></div>
          <div class="btns">
            <div class="btn today-btn">
              <i class="fas fa-calendar-day"></i>
            </div>
            <div class="btn prev-btn">
              <i class="fas fa-chevron-left"></i>
            </div>
            <div class="btn next-btn">
              <i class="fas fa-chevron-right"></i>
            </div>
          </div>
        </div>
        <div class="weekdays">
          <div class="day">Sun</div>
          <div class="day">Mon</div>
          <div class="day">Tue</div>
          <div class="day">Wed</div>
          <div class="day">Thu</div>
          <div class="day">Fri</div>
          <div class="day">Sat</div>
        </div>
        <div class="days">
        </div>
      </div>
    </div>

<div class="midcontent">
	<div class="dashboard-overview">
		<h2 class="do">Dashboard Overview</h2>
		<!-- Add your summary metrics and analytics here -->
	</div>

	<div class="vehicle-management">
		<h2 class="vm">Vehicle Management</h2>
		<!-- Add vehicle management functionalities here -->
	</div>

	<div class="booking-management">
		<h2 class="bm">Booking Management</h2>
		<!-- Add booking management functionalities here -->
	</div>

	<div class="customer-management">
		<h2 class="cm">Customer Management</h2>
		<!-- Add customer management functionalities here -->
	</div>

	<div class="payment-management">
		<h2 class="pm">Payment Management</h2>
		<!-- Add payment management functionalities here -->
	</div>

	<div class="reporting-analytics">
		<h2 class="ra">Reporting and Analytics</h2>
		<!-- Add reporting and analytics functionalities here -->
	</div>

	<div class="settings-configuration">
		<h2 class="sc">Settings and Configuration</h2>
		<!-- Add settings and configuration functionalities here -->
	</div>

	<div class="maintenance-service">
		<h2 class="ms">Maintenance and Service</h2>
		<!-- Add maintenance and service functionalities here -->
	</div>

	<div class="support-help">
		<h2 class="sh">Support and Help</h2>
		<!-- Add support and help functionalities here -->
	</div>

	<div class="security-access">
		<h2 class="sac">Security and Access Control</h2>
		<!-- Add security and access control functionalities here -->
	</div>
</div>
</div>


            <!--------- calender popup Script section start --------->
<script>
    const calendarToggleIcon = document.getElementById('calendar-toggle-icon');
    const calendar = document.querySelector('.calendar');
    const midContent = document.querySelector('.midcontent');

    function toggleCalendarAndMidContent() {
        calendar.classList.toggle('hidden');
        midContent.classList.toggle('hidden');
    }

    calendarToggleIcon.addEventListener('click', () => {
        toggleCalendarAndMidContent();
    });
</script>

            <!--------- calender popup Script section end ------------->






<!------------------------------Footer Section ---------------------------->
<div class="footer">
    <p>&copy; 2024 Premium Cars-Rental. All rights reserved.</p>
</div>


<!-- JavaScript -->
<script src="js/adminscript.js"></script>
<!----Calender----->
<script src="js/admincalender.js"></script>



</body>
</html>