<?php
/**
*    Class Queries
*   A class that handles database queries.
*/
class Queries
{
	/** 

    * The connection object to the database.
    * @var object
    */
	public $conn;	
	
	/**
    * Constructs a new Queries object.
    * @param object $conn The connection object to the database.
    * @return void
    */
	function __construct($conn)
	{
		$this->conn = $conn;
	}
	/**
    * Display Venue.
    * @return void
    */
	public function Venue(){
		$sql = 'SELECT * FROM  Venue';
		$result = mysqli_query($this->conn, $sql);
		if (mysqli_num_rows($result) > 0) {
				echo "<table>
						<tr>
							<th>ID</th><th>Name</th>
						</tr>";
				while ($row = mysqli_fetch_assoc($result)) {
						echo "<tr><td>" . $row['id'] . "</td>";
						echo "<td>" . $row['name'] . "</td></tr>";
				}
				echo "</table>";
		} else {
				echo "Empty result";
		}
	}
	/**
    * Display Teams.
    * @return void
    */
	public function Teams(){
		$sql = 'SELECT * FROM  Teams';
		$result = mysqli_query($this->conn, $sql);
		if (mysqli_num_rows($result) > 0) {
				echo "<table>
						<tr>
							<th>ID</th><th>Name</th><th>Captain</th>
						</tr>";
				while ($row = mysqli_fetch_assoc($result)) {
						echo "<tr><td>" . $row['id'] . "</td>";
						echo "<td>" . $row['name'] . "</td>";
						echo "<td>" . $row['captain'] . "</td></tr>";
				}
				echo "</table>";
		} else {
				echo "Empty result";
		}
	}
	/**

    * Display Matches.
    * @return void
    */
	public function Matches(){
		$sql = 'SELECT * FROM  Matches';
		$result = mysqli_query($this->conn, $sql);
		if (mysqli_num_rows($result) > 0) {
				echo "<table>
				<tr>
					<th>id</th><th>venue_id</th><th>date_of_match</th><th>team1_id</th><th>team2_id</th><th>toss_winner</th><th>winner</th>
				</tr>";
				while ($row = mysqli_fetch_assoc($result)) {
						echo "<tr><td>" . $row['id'] . "</td>";
						echo "<td>" . $row['venue_id'] . "</td>";
						echo "<td>" . $row['date_of_match'] . "</td>";
						echo "<td>" . $row['team1_id'] . "</td>";
						echo "<td>" . $row['team2_id'] . "</td>";
						echo "<td>" . $row['toss_winner'] . "</td>";
						echo "<td>" . $row['winner'] . "</td></tr>";
				}
				echo "</table>";
		} else {
				echo "Empty result";
		}
	}
	/**

    * Display Join of Tables.
    * @return void
    */
	public function Join(){
		$sql = "SELECT v.name AS 'Venue of match',        m.date_of_match AS 'Date of match',        t1.name AS 'Team 1 name',        t2.name AS 'Team 2 name',        t1.captain AS 'Captain of team 1',        t2.captain AS 'Captain of team 2',        m.toss_winner AS 'Toss won by',        m.winner AS 'Match won by' FROM Matches m JOIN Venue v ON m.venue_id = v.id JOIN Teams t1 ON m.team1_id = t1.id JOIN Teams t2 ON m.team2_id = t2.id order by m.date_of_match;
		";
		$result = mysqli_query($this->conn, $sql);
		if (mysqli_num_rows($result) > 0) {
				echo "<table>
				<tr>
					<th>JOIN Table</th>
				</tr>
				<tr>
					<th>Venue of match </th><th>Date of match</th><th>Team 1 name</th><th> Team 2 name </th><th>Captain of team 1</th><th>Captain of team 2</th><th> Toss won by </th><th> Match won by </th>
				</tr>";
				$row = mysqli_fetch_assoc($result);
			
				
				while ($row = mysqli_fetch_assoc($result)) {

						echo "<><td>" . $row['Venue of match'] . "</td>";
						echo "<td>" . $row['Date of match'] . "</td>";
						echo "<td>" . $row['Team 1 name'] . "</td>";
						echo "<td>" . $row['Team 2 name'] . "</td>";
						echo "<td>" . $row['Captain of team 1'] . "</td>";
						echo "<td>" . $row['Captain of team 2'] . "</td>";
						echo "<td>" . $row["Toss won by"] . "</td>";
						echo "<td>" . $row["Match won by"] . "</td></tr>";
			
			}
				echo "</table>";
		} else {
				echo "Empty result";
		} 
}
}
?>