<!DOCTYPE html>
<html>
    <head></head>
    <body>
    <table class="table">
        <tr>
            <td colspan="6" style="text-align: center!important">
                    <h3>Mahavir Tours & Travels</h3><br>
                    9,Patel Shopping Center, Beside Shital Hotel,Nr Railway Station Bharuch <br>
                    Mo : 9737811326 || Email Id : harshilshah90@yahoo.com / inquiry@roroferry.in
            </td>
        </tr>
        <hr><br>
        
        <tr>
            <td colspan="6" style="text-align: center!important">
                <br><br>
                <span style="background-color: gray;">Roroferry Services Ticket</span>
            </td>
        </tr>
        <br>
        <tr>
            <td colspan="3" style="text-align: left!important">
                Tirp Type : <?php print_r($ticketDetails[0]->trip_route);?>
            </td>
            <td colspan="3" style="text-align: right!important">
                Ticket No : <?php print_r($ticketDetails[0]->transaction_id);?>
            </td>
        </tr>
        
        <tr>
            <td colspan="3" style="text-align: left!important">
                <center>Booking Date-time : <?php print_r((date("h:i:s d-m-Y")));?></center>
            </td>
            
            <td colspan="3" style="text-align: right!important">
                <center>Booking Transaction Id : <?php print_r($ticketDetails[0]->transaction_id);?></center>
            </td>
            
        </tr>
        <tr >
            <td colspan="4">
                <br><br>
                <table border="1" cellpadding="5">
                    <tr>
                        <td>No</td>
                        <td>Name</td>
                        <td>Sex</td>
                        <td>Age</td> 
                    </tr>
                    <?php for($i = 0 ;$i < count($passangerDetails) ;$i++){?>
                        <tr>
                            <td><?php print_r($i);?></td>
                            <td><?php print_r($passangerDetails[$i]->passangerName); ?></td>
                            <td><?php print_r($passangerDetails[$i]->passangerGender);?></td>
                            <td><?php print_r($passangerDetails[$i]->passangerAge);?></td> 
                        </tr>
                    <?php }?>
                </table>
            </td>
            <td colspan="2">
                <br><br>
                <table border="1" cellpadding="5">
                    <tr>
                        <td style="text-align: center!important">
                            <span style="background-color: gray;margin-top:5px" >Journey Information</span>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>Journey Date : <?php print_r(date("d-m-Y", strtotime($ticketDetails[0]->depatureDate)));?> </td>
                    </tr> 
                    
                    <tr>
                        <?
                        <td>Journey day : <?php print_r(date("l"),strtotime($ticketDetails[0]->depatureDate)); ?></td>
                    </tr> 
                    
                    <tr>   
                        <td>Reporting Time : </td>
                    </tr> 
                    
                    <tr> 
                        <td>Departure Time : <?php print_r($ticketDetails[0]->pickupTIme); ?></td>
                    </tr>
                </table>
            </td>
        </tr>

    </table>
    </body>
</html>