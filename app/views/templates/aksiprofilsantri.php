<div class="aksi">
    <?php foreach ($data['id'] as $row) : ?>
    <a href="<?= base_url; ?>/santri/editsantri/<?= $row ?>" class="badge badgeinfo"
        style="font-size: 1.5rem; ">Edit</a>
    <a href="<?= base_url; ?>/santri/hapus/<?= $row ?>" class=" badge badge-danger"
        onclick="return confirm('Hapus data?');" style="font-size: 1.5rem;">Hapus</a>
    <?php endforeach; ?>
</div>
</div>
</div>
</div>
</div>

</body>

</html>