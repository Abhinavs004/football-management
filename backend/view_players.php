<?php include 'footballdb.php'; ?>

<?php
$player = "SELECT * FROM player";
$plres = $conn->query($player);

if ($plres->num_rows > 0) {
    while($row = $plres->fetch_assoc()) {
        echo "<tr>
                <td>{$row['player_id']}</td>
                <td>{$row['age']}</td>
                <td>{$row['position']}</td>
                <td>{$row['position1']}</td>
                <td>{$row['position2']}</td>
                <td>{$row['position3']}</td>
                <td>{$row['apps']}</td>
                <td>{$row['goals']}</td>
                <td>{$row['assists']}</td>
                <td>{$row['tackles']}</td>
                <td>{$row['interceptions']}</td>
                <td>{$row['clean_sheets']}</td>
                <td>{$row['saves']}</td>
                <td>{$row['squad_number']}</td>
                <td>{$row['fouls']}</td>
                <td>{$row['yellow_card']}</td>
                <td>{$row['red_card']}</td>
                <td>{$row['nationality']}</td>
                <td>{$row['team_id']}</td>
            </tr>";
    }
} else {
    echo "<tr><td colspan='19'>No players found</td></tr>";
}
?>
