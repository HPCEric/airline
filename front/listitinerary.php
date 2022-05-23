<div id="welcome">
    <h1>顯示航班的訂票清單</h1>
    <p>
        顯示目前航班的所有訂票清單。
    </p>
    <!-- Fetch Rows -->
    <table class="aatable">
        <tr>
            <th>客戶姓名</th>
            <th>航班名稱</th>
            <th>出發地點</th>
            <th>目的地點</th>
            <th>出發日期</th>
        </tr>

        <?php
        // $GIs = $Itinerary->q("SELECT itinerary.GID,guest.FirstName,guest.LastName,itinerary.FID,flights.FName,schedule.Date From itinerary,guest,flights,schedule WHERE itinerary.GID = guest.GID && itinerary.FID=flights.FID && itinerary.SID=schedule.SID");
        $GIs = $Itinerary->q("SELECT guest.FirstName,guest.LastName,flights.FName,schedule.Date From itinerary,guest,flights,schedule WHERE itinerary.GID = guest.GID && itinerary.FID=flights.FID && itinerary.SID=schedule.SID");
        foreach ($GIs as $GI) {
        ?>
            <tr>
                <td><?=$GI['LastName'];?><?=$GI['FirstName'];?></td>
                <td><?=$GI['FName'];?></td>
                <td></td>
                <td></td>
                <td><?=$GI['Date'];?></td>
            </tr>
        <?php
        }

        // $itineraryData = getItinerary(0);

        // for ($index = 0; $index < count($itineraryData); $index++) {
        //     $guestItinerary = $itineraryData[$index];
        //     echo "<tr>";
        //     echo "<td>" . $guestItinerary->get_lastName() . $guestItinerary->get_firstName() . "</td>";
        //     echo "<td><a class='data' href='flightinfo.php?FID=" . $guestItinerary->get_FID() . "'>" . $guestItinerary->get_FName() . "</a></td>";

        //     echo "<td>" . $guestItinerary->get_source() . "</td>";
        //     echo "<td>" . $guestItinerary->get_dest() . "</td>";
        //     echo "<td>" . $guestItinerary->get_travelDate() . "</td>";
        //     echo "</tr>";
        // }
        ?>
    </table>
</div>