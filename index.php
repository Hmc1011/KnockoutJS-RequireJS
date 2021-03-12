

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/knockout/3.5.1/knockout-latest.js" integrity="sha512-2AL/VEauKkZqQU9BHgnv48OhXcJPx9vdzxN1JrKDVc4FPU/MEE/BZ6d9l0mP7VmvLsjtYwqiYQpDskK9dG8KBA==" crossorigin="anonymous"></script>
  <script data-main='asset/js/main' src="https://cdnjs.cloudflare.com/ajax/libs/require.js/2.3.6/require.min.js" integrity="sha512-c3Nl8+7g4LMSTdrm621y7kf9v3SDPnhxLNhcjFJbKECVnmZHTdo+IRO05sNLTH/D3vA6u1X32ehoLC7WFVdheg==" crossorigin="anonymous"></script>
  <title>Document</title>
</head>
<body>
      <h1 data-bind='text: text ' > </h1>
      <input type="text" data-bind="value: text, valueUpdate:'afterkeydown' ">
      <input type="submit" data-bind="click: change">
      <ul data-bind="foreach:array">
        <li data-bind="text: $data"> </li>
      </ul>
      <script>
      

      </script>
</body>
</html>