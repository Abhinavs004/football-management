<?php include 'footballdb.php'; ?>

<?php
$league = "SELECT * FROM league";
$lgres = $conn->query($league);

if ($lgres->num_rows > 0) {
    while($row = $lgres->fetch_assoc()) {
        echo "<tr>
                <td>{$row['league_id']}</td>
                <td>{$row['number_of_clubs']}</td>
                <td>{$row['top_scorer_id']}</td>
                <td>{$row['top_assister_id']}</td>
                <td>{$row['most_red_card']}</td>
                <td>{$row['league_leader_id']}</td>
                <td>{$row['best_goal_keeper_id']}</td>
                <td>{$row['country']}</td>
            </tr>";
    }
} else {
    echo "<tr><td colspan='8'>No leagues found</td></tr>";
}
?>
