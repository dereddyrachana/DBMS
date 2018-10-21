<!DOCTYPE html>
<html>
<head>
	<title>Block Available</title>
<style>
body{
	background: rgb(79, 123, 255);
	color: white;
}
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
    height: 50px;
}
td, th {
    border: 1px solid #dddddd;
    text-align: center;
    padding: 8px;
    height: 70px;
}
tr:nth-child(even) {
    background-color: #ffffff;
    color: black;
}
h1{
	color: white;
	text-align: center;
	font-family:sans-serif;
}
button {
    background-color:#3366ff;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: 1px solid white;
    cursor: pointer;
    width: 50%;
    font-size: 16px;
    position: relative;
    margin-top: 100px;
	margin-left: 25%; 
	}
</style>
<body>


<h1>BLOCKS AVAILABLE</h1>
<table>
  <tr>
    <th>BLOCKS</th>
    <th>A/C ROOMS</th>
    <th>NON-A/C ROOMS</th>
  </tr>
  <tr>
    <td>BLOCK C</td>
    <td> <input type="radio" name="room">AVAILABLE</td>
    <td> <input type="radio" name="room">AVAILABLE</td>
  </tr>
  <tr>
    <td>BLOCK D</td>
    <td> <input type="radio" name="room"> AVAILABLE</td>
    <td> <input type="radio" name="room"> AVAILABLE</td>
  </tr>
  <tr>
    <td>BLOCK E</td>
    <td> <input type="radio" name="room">AVAILABLE</td>
    <td><input type="radio" name="room">AVAILABLE</td>
  </tr>
  <tr>
    <td>BLOCK F</td>
    <td><input type="radio" name="room">AVAILABLE</td>
    <td><input type="radio" name="room">AVAILABLE</td>

  </tr>
</table>

<button type="submit">REGISTER</button>
</body>
</html>

</body>
</html>