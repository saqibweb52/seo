<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="sentence-count" content="0">
  <meta name="word-count" content="0">
  <meta name="character-count" content="0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <style>
    body{
        background-color: #f0f0f0;

    }

    #container {
        background-color: #f0f0f0;
        padding: 20px;
    }

    textarea {
  resize: none;

  height: 400px;
  width: 350px;


}

h1{
    font-family:Times New Roman;
}
  </style>
</head>
<body>
<div class="container" id="container">
    <div class="form-group">
        <h1> Text Count</h1>
        <textarea class="form-control"  id="textarea" placeholder="Write Your Text Here"></textarea>
    </div>
    <div id="counts">
        <p>Sentences: <span id="sentences"></span></p>
        <p>Words: <span id="words"></span></p>
        <p>Characters: <span id="characters"></span></p>
    </div>
</div>

<script>
    var textarea = document.getElementById("textarea");
    var sentences = document.getElementById("sentences");
    var words = document.getElementById("words");
    var characters = document.getElementById("characters");
    var sentenceCountMeta = document.querySelector('meta[name="sentence-count"]');
    var wordCountMeta = document.querySelector('meta[name="word-count"]');
    var characterCountMeta = document.querySelector('meta[name="character-count"]');

    textarea.addEventListener("input", function() {
        var text = textarea.value;

        // Count sentences
        var sentenceCount = text.split(/[.!?]+/).length - 1;
        sentences.innerHTML = sentenceCount;
        sentenceCountMeta.setAttribute('content', sentenceCount);

        // Count words
        var wordCount = text.split(/\s+/).length;
        words.innerHTML = wordCount;
        wordCountMeta.setAttribute('content', wordCount);

        // Count characters
        var characterCount = text.length;
        characters.innerHTML = characterCount;
        characterCountMeta.setAttribute('content', characterCount);
    });
</script>
</body>

</html>