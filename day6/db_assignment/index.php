<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <style>
        .postCtr {
            border-style: solid;
            padding: 5px;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        #postList {
            width: 75%;
        }
    </style>
</head>

<body>
    <nav>
        <a href="index.php">Home</a>&nbsp;&nbsp;
        <a href="input.php">Add Post</a>&nbsp;&nbsp;
        <a href="login.php">Log-in</a>&nbsp;&nbsp;
    </nav>
    <h1>Home Page</h1>
    <section>
        <div id="postList"></div>
    </section>
    <script>
        async function initializePost() {
            const response = await fetch("api/post_query.php");
            const posts = await response.json();
            posts.slice().reverse().forEach((post) => {
                let postContainer = document.createElement("div");
                postContainer.className = "postCtr";
                postContainer.setAttribute("postId", post[0]);
                let postTitle = document.createElement("b");
                let postContent = document.createElement("p");
                let postCat = document.createElement("p");
                let newLine = document.createElement("br");
                postTitle.innerHTML = post[1];
                postContent.innerHTML = post[2];
                postCat.innerHTML = `Category: ${post[3]}`;
                postContainer.appendChild(postTitle);
                postContainer.appendChild(newLine);
                postContainer.appendChild(postContent);
                postContainer.appendChild(newLine);
                postContainer.appendChild(postCat);
                document.getElementById("postList").appendChild(postContainer);
            })
        }
        initializePost();
    </script>
</body>

</html>