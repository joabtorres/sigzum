<!-- Modal -->
<div class="modal fade" id="modalTrailer" tabindex="-1" aria-labelledby="modalTrailerLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="ratio ratio-16x9">
                    <iframe src="<?= "https://www.youtube.com/embed/{$film->trailer}" ?>" title="YouTube video" style="max-width: 100%;height: 100%;" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
</div>