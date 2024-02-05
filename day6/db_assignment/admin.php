<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        .dataCtr {
            border-style: solid;
            padding: 5px;
            border-radius: 5px;
            margin-bottom: 15px;
        }

        .dataListCtr {
            width: 75%;
        }

        details>button {
            margin-top: 15px;
        }
    </style>
</head>

<body>
    <!-- Admin Panel -->
    <nav>
        <a href="index.php">Home</a>&nbsp;&nbsp;
    </nav>
    <h1>Admin Panel</h1>
    <section style="padding-left: 30px; padding-right:30px">
        <h2>Posts</h2>
        <details>
            <summary>Post lists</summary>
            <button onclick="window.location='input.php'">Add Post</button>
            <br /><br />
            <div id="postList" class="dataListCtr"></div>
        </details>
        <h2>Categories</h2>
        <details>
            <summary>Category lists</summary>
            <button onclick="alert('not implemented yet')">Add Categories</button>
            <br /><br />
            <div id="catList" class="dataListCtr"></div>
        </details>
        <h2>Users</h2>
        <details>
            <summary>User lists</summary>
            <button onclick="alert('not implemented yet')">Add Users</button>
            <br /><br />
            <div id="userList" class="dataListCtr"></div>
        </details>
        <h2>Comments</h2>
        <details>
            <summary>Comment lists</summary>
            <button onclick="alert('not implemented yet')">Add Comments</button>
            <br /><br />
            <div id="commentList" class="dataListCtr"></div>
        </details>
    </section>
    <script>
        async function initializePost() {
            const response = await fetch("api/post_query.php");
            const posts = await response.json();
            posts.forEach((post) => {
                let postContainer = document.createElement("div");
                postContainer.className = "dataCtr";
                postContainer.setAttribute("postId", post[0]);
                let postTitle = document.createElement("b");
                let postContent = document.createElement("p");
                let newLine = document.createElement("br");
                let editButton = document.createElement("button");
                editButton.innerText = "edit";
                let deleteButton = document.createElement("button");
                deleteButton.innerText = "delete";
                editButton.addEventListener("click", () => {
                    editFunction(postContainer);
                })
                deleteButton.addEventListener("click", () => {
                    removePost(postContainer);
                })
                deleteButton.style.marginLeft = "5px";
                postTitle.innerHTML = post[1];
                postContent.innerHTML = post[2];
                postContainer.appendChild(postTitle);
                postContainer.appendChild(newLine);
                postContainer.appendChild(postContent);
                postContainer.appendChild(newLine);
                postContainer.appendChild(editButton);
                postContainer.appendChild(deleteButton);
                document.getElementById("postList").appendChild(postContainer);
            })
        }
        async function initializeCat() {
            const response = await fetch("api/cat_query.php");
            const categories = await response.json();
            categories.forEach((category) => {
                let catContainer = document.createElement("div");
                catContainer.className = "dataCtr";
                catContainer.setAttribute("catId", category[0]);
                let categoryName = document.createElement("b");
                let newLine = document.createElement("br");
                let editButton = document.createElement("button");
                editButton.innerText = "edit";
                let deleteButton = document.createElement("button");
                deleteButton.innerText = "delete";
                editButton.addEventListener("click", () => {
                    editFunction(catContainer);
                })
                deleteButton.addEventListener("click", () => {
                    removeCat(catContainer);
                })
                deleteButton.style.marginLeft = "5px";
                categoryName.innerHTML = category[1];
                catContainer.appendChild(categoryName);
                catContainer.appendChild(newLine);
                catContainer.appendChild(editButton);
                catContainer.appendChild(deleteButton);
                document.getElementById("catList").appendChild(catContainer);
            })
        }
        async function initializeUser() {
            const response = await fetch("api/user_query.php");
            const users = await response.json();
            users.forEach((user) => {
                let userContainer = document.createElement("div");
                userContainer.className = "dataCtr";
                userContainer.setAttribute("userId", user[0]);
                let userName = document.createElement("b");
                let newLine = document.createElement("br");
                userName.innerHTML = user[1];
                userContainer.appendChild(userName);
                userContainer.appendChild(newLine);
                if (user[1] !== "admin") {
                    let editButton = document.createElement("button");
                    editButton.innerText = "edit";
                    let deleteButton = document.createElement("button");
                    deleteButton.innerText = "delete";
                    editButton.addEventListener("click", () => {
                        editFunction(userContainer);
                    })
                    deleteButton.addEventListener("click", () => {
                        removeUser(userContainer);
                    })
                    deleteButton.style.marginLeft = "5px";
                    userContainer.appendChild(editButton);
                    userContainer.appendChild(deleteButton);
                }
                document.getElementById("userList").appendChild(userContainer);
            })
        }
        async function initializeComment() {
            const response = await fetch("api/comment_query.php");
            const comments = await response.json();
            comments.forEach((comment) => {
                let commentContainer = document.createElement("div");
                commentContainer.className = "dataCtr";
                commentContainer.setAttribute("commentId", comment[0]);
                let commentContent = document.createElement("b");
                let newLine = document.createElement("br");
                let editButton = document.createElement("button");
                editButton.innerText = "edit";
                let deleteButton = document.createElement("button");
                deleteButton.innerText = "delete";
                editButton.addEventListener("click", () => {
                    editFunction(commentContainer);
                })
                deleteButton.addEventListener("click", () => {
                    removeComment(commentContainer);
                })
                deleteButton.style.marginLeft = "5px";
                commentContent.innerHTML = comment[1];
                commentContainer.appendChild(commentContent);
                commentContainer.appendChild(newLine);
                commentContainer.appendChild(editButton);
                commentContainer.appendChild(deleteButton);
                document.getElementById("commentList").appendChild(commentContainer);
            })
        }


        async function removePost(postContainer) {
            const response = await fetch("api/post_delete.php?postId=" + postContainer.getAttribute("postId"));
            const result = await response.json();
            if (result) {
                document.getElementById("postList").removeChild(postContainer);
            } else {
                alert("Failed to delete post");
            }
        }
        async function removeCat(catContainer) {
            const response = await fetch("api/cat_delete.php?catId=" + catContainer.getAttribute("catId"));
            const result = await response.json();
            if (result) {
                document.getElementById("catList").removeChild(catContainer);
            } else {
                alert("Failed to delete category");
            }
        }
        async function removeUser(userContainer) {
            const response = await fetch("api/user_delete.php?userId=" + userContainer.getAttribute("userId"));
            const result = await response.json();
            if (result) {
                document.getElementById("userList").removeChild(userContainer);
            } else {
                alert("Failed to delete user");
            }
        }
        async function removeComment(commentContainer) {
            const response = await fetch("api/comment_delete.php?commentId=" + commentContainer.getAttribute("commentId"));
            const result = await response.json();
            if (result) {
                document.getElementById("commentList").removeChild(commentContainer);
            } else {
                alert("Failed to delete comment");
            }
        }

        function editFunction(Container) {
            alert("not implemented yet...");
        }

        initializePost();
        initializeCat();
        initializeUser();
        initializeComment();
    </script>
</body>

</html>