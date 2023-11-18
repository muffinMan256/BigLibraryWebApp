<?php

echo  "
    <nav class='fill'>
    <ul>

    <li><img src='https://img.freepik.com/premium-vector/stack-books-doodle-style-stack-books-textbooks-notepads-reading-vector-illustration_490811-1516.jpg?w=740' alt='SCP'></li>
    <li><a href='index.php'>Home</a></li>
    <li><a href='create.php'>Create</a></li>
    <li><a href='publisher.php'>Publisher</a></li>
    <li class='nav-item dropdown'>
                <a class='nav-link dropdown-toggle' href='#' role='button' data-bs-toggle='dropdown' aria-expanded='false'>
                    Filter by Type
                </a>
                <ul class='dropdown-menu'>
                    <li><a class='dropdown-item' href='filterBook.php'>Books</a></li>
                    <li><a class='dropdown-item' href='filterCd.php'>CDs</a></li>
                    <li><a class='dropdown-item' href='filterDvd.php'>DVDs</a></li>
                </ul>
            </li>
 
    </ul>
    </nav>
";


