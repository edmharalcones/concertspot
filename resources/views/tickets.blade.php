<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tickets') }}
        </h2>
    </x-slot>

    <div class="py-12" > 
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8"  >
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg" >
                 <div class="p-6">
                     <h2 style="color:#421A85;font-weight:500;font-size:2rem;">Active Events</h2>
                     <br>
                     <div class="table-responsive">
                <table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Artists</th>
            <th>Ticket Types</th>
            <th>Ticket Prices</th>
            <th>Current available</th>
            <th>Banner</th>
            <th>Start date</th>
            <th>End date</th>
            <th>Event Time</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $servername = "localhost";
        $username = "u548574294_root";
        $password = "AAaa!!8520";
        $database = "u548574294_laravel";
        $connection = new mysqli($servername, $username, $password, $database);

        if ($connection->connect_error) {
            die("Connection failed: " . $connection->connect_error);
        }

        $sql = "SELECT *, DATE_FORMAT(event_time, '%h:%i %p') AS formatted_event_time FROM events";
        $result = $connection->query($sql);

        if (!$result) {
            die("Invalid query: " . $connection->error);
        }

        while ($row = $result->fetch_assoc()) {
            echo '<tr>
                <td>' . $row["id"] . '</td>
                <td>' . $row["event_name"] . '</td>
                <td>' . $row["event_artists"] . '</td>
                <td>
                    <ul>
                        <li>VIP</li>
                        <li>Patron A</li>
                        <li>Patron B</li>
                        <li>Upper Box</li>
                        <li>Lower Box</li>
                        <li>Gen Ad</li>
                    </ul>
                </td>
                <td>
                    <ul>';
         
            $ticketPricesQuery = "SELECT ticket_price FROM tickets WHERE event_id = " . $row["id"];
            $ticketPricesResult = $connection->query($ticketPricesQuery);
            while ($ticketPriceRow = $ticketPricesResult->fetch_assoc()) {
                echo '<li>' . $ticketPriceRow["ticket_price"] . '</li>';
            }
            echo '</ul>
                </td>
                <td>
                    <ul>';
            
            $maxTicketNumbersQuery = "SELECT max_tickets FROM tickets WHERE event_id = " . $row["id"];
            $maxTicketNumbersResult = $connection->query($maxTicketNumbersQuery);
            while ($maxTicketNumberRow = $maxTicketNumbersResult->fetch_assoc()) {
                echo '<li>' . $maxTicketNumberRow["max_tickets"] . '</li>';
            }
            echo '</ul>
                </td>
                <td><img src="' . $row['banner_image'] . '" width="50" height="50" alt="banner image"/></td>
                <td>' . $row["start_date"] . '</td>
                <td>' . $row["end_date"] . '</td>
                <td>' . $row["formatted_event_time"] . '</td>
               <td>
    <td>
    <button class="btn btn-success btn-sm" onclick="saveEID();">
        <a href="https://concertspot.online/public/booking" class="text-light">Book</a>
    </button>
</td>
            </tr>';
        }
        ?>
    </tbody>
</table>
<script>
  function saveEID() {
    var eventId = $(event.target).closest("tr").find("td:first").text();
     localStorage.itemname = eventId;
}
</script>

              </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
