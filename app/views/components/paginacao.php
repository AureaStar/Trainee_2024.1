<link rel="stylesheet" href="../../../public/css/paginacao.css">
<nav class="pagFrame" aria-label="Page navigation example">
    <ul class="pagination">
    <li class="page-item <?= $page <= 1 ? "disabled" : "" ?>">
        <a class="page-link" href="?pagina=<?= $page - 1 ?>" aria-label="Previous">
        <span class="text-dark" aria-hidden="true"><i class="bi bi-caret-left-fill"></i></span>
        </a>
    </li>
    
    <?php for($page_number = 1; $page_number <= $total_pages; $page_number++): ?>
        <li class="page-item"><a class="page-numbers page-link <?= $page_number == $page ? "active" : "" ?>" href="?pagina=<?= $page_number ?>"><?= $page_number ?></a></li>
    <?php endfor ?>

    <li class="page-item <?= $page >= $total_pages ? "disabled" : "" ?>">
        <a class="page-link" href="?pagina=<?= $page + 1 ?>" aria-label="Next">
        <span class="text-dark" aria-hidden="true"><i class="bi bi-caret-right-fill"></i></span>
        </a>
    </li>
    </ul>
</nav>