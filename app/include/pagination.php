<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        <?php for ($i = 1; $i <= $total_pages; $i++): ?>
            <li class="page-item">
                <a class="page-link" href="<?php echo "?page=".($i);?>"><?php echo $i?></a>
            </li>
        <?php endfor; ?>

    </ul>
</nav>