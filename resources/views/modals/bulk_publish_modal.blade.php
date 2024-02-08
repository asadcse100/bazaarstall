<div id="bulk-publish-modal" class="modal fade">
    <div class="modal-dialog modal-sm modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title h6">{{ translate('Publish Confirmation') }}</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            </div>
            <div class="modal-body text-center">
                <p class="mt-1">{{ translate('Are you sure to publish those files?') }}</p>
                <button type="button" class="btn btn-link mt-2" data-dismiss="modal">{{ translate('Cancel') }}</button>
                <a href="javascript:void(0)" onclick="bulk_publish()" class="btn btn-primary mt-2">{{ translate('Publish') }}</a>
            </div>
        </div>
    </div>
</div>