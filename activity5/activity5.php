<!DOCTYPE html>
<html>
<head>
<title>Registration Form</title>
<style>
   th {
    text-align: left;
  }
</style>
</head>
<body>
  <form action="Activity5-preview.php" method="GET">
  <table>
    <h1>Registration Form</h1>
    <tbody>
      <tr>
        <th><label for="name">Name:</label></th>
        <td><input type="text" id="name" name="name" ></td>
      </tr>
      <tr>
        <th><label for="username">Username:</label></th>
        <td><input type="text" id="username" name="username"></td>
      </tr>
      <tr>
        <th><label for="password">Password:</label></th>
        <td><input type="password" id="password" name="password"></td>
      </tr>
      <tr>
        <th><label for="address">Address:</label></th>
        <td><input type="text" id="address" name="address"></td>
      </tr>
      <tr>
        <th><label for="country">Country:</label></th>
        <td>
          <select id="country" name="country">
            <option value="" disabled selected>Select a country</option>
            <option value="America">America</option>
            <option value="England">England</option>
            <option value="Turkey">Turkey</option>
            <option value="Spain">Spain</option>
          </select>
        </td>
      </tr>
      <tr>
        <th><label for="zip">ZIP Code:</label></th>
        <td><input type="text" id="zip" name="zip"></td>
      </tr>
      <tr>
        <th><label for="email">Email:</label></th>
        <td><input type="email" id="email" name="email"></td>
      </tr>
      <tr>
        <th><label for="sex">Sex:</label></th>
        <td>
          <input type="radio" id="male" name="sex" value="Male">
          <label for="male">Male</label>
          <input type="radio" id="female" name="sex" value="Female">
          <label for="female">Female</label>
        </td>
      </tr>
      <tr>
        <th><label for="language">Language:</label></th>
        <td>
          <input type="checkbox" id="english" name="language[]" value="English">
          <label for="english">English</label>
          <input type="checkbox" id="french" name="language[]" value="French">
          <label for="french">French</label>
          <input type="checkbox" id="german" name="language[]" value="German">
          <label for="german">German</label>
        </td>
      </tr>
      <tr>
        <th><label for="about">About:</label></th>
        <td>
          <textarea id="about" name="about" style="height:200px"></textarea>
        </td>
      </tr>
      <tr>
        <th></th>
        <td> <button type="submit">Submit</button></td>
      </form>
      </tr>
    </tbody>
  </table>

</body>
</html>