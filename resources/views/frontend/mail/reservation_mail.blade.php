<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.field {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
</head>
<body>

<h2 align="center">Food Studio - Reservation</h2>

<div class="container" style="padding: 25px 200px 25px 200px;">

    <label><h3>Date:</h3></label>
    <input type="text" class="field" value="{{ $details['date'] }}" readonly>

    <label><h3>Time (24 Hours):</h3></label>
    <input type="text" class="field" value="{{ $details['time'] }}" readonly>

    <label><h3>Title:</h3></label>
    <input type="text" class="field" value="{{ $details['title'] }}" readonly>

    <label><h3>Name:</h3></label>
    <input type="text" class="field" value="{{ $details['name'] }}" readonly>

    <label><h3>Email:</h3></label>
    <input type="text" class="field" value="{{ $details['email'] }}" readonly>

    <label><h3>Phone:</h3></label>
    <input type="text" class="field" value="{{ $details['phone'] }}" readonly>

    
  
</div>

</body>
</html>
