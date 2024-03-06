<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, 
                   initial-scale=1.0">
    <title>User Polls</title>
    <link rel="stylesheet" href="./style.css">
</head>
 
<body>
    <div class="container">
        <h1 class="poll-question">
          Do you like programming?
        </h1>
        <form id="poll-form" class="poll-form">
            <label>
                <input type="radio"
                       name="vote"
                       value="yes"> Yes
            </label>
            <label>
                <input type="radio"
                       name="vote"
                       value="no"> No
            </label>
            <button type="submit"
                    class="vote-button">
              Vote
            </button>
        </form>
        <div id="results" class="results">
            <h2 class="results-title">
              Results
            </h2>
            <div class="results-count">
                <p>Yes: 
                  <span id="yes-count"
                        class="count">0
                  </span>
                </p>
                <p>No: 
                  <span id="no-count"
                             class="count">0
                  </span>
                </p>
            </div>
        </div>
    </div>
    <script src="./vote.js"></script>
</body>
 
</html>