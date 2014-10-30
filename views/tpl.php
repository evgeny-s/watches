<!DOCTYPE html>
<html>
<head>
    <title>Faceted search</title>
    <link rel="stylesheet" type="text/css" media="screen" href="/css/style.css" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <script type="text/javascript" src="/js/script.js"></script>
</head>
<body>
<div class="body">
    <div class="wrapper">
        <div class="">
            <h3>
                Select Attributes:
            </h3>
            <form method="get" action="" id="attribute_form">
                <? foreach($result['all_attributes'] as $key => $a): ?>
                    <div>
                        <input name="attributes[]" value="<?= $a; ?>" type="checkbox" <? if(in_array($a, $result['selected_attributes'])): ?>checked="checked" <? endif; ?> class="input_attr" />
                        <label>
                            <?= $a; ?> <? if($result['all_counts'][$key]): ?>(<?= $result['all_counts'][$key]; ?>)<? endif; ?>
                        </label>
                    </div>
                <? endforeach; ?>
            </form>
        </div>
        <div class="items_wrapper">
            <h3>
                Results:
            </h3>
            <div>
                <? if(count($result['selected_attributes'])): ?>
                    Found items: <?= count($result['result_items']); ?>
                <? endif; ?>
            </div>
            <div class="head">
                <div>
                    modelId
                </div>
                <div>
                    brandTitle
                </div>
                <div>
                    name
                </div>
            </div>
            <div class="body">
                <? if(count($result['result_items'])): ?>
                    <? foreach($result['result_items'] as $i): ?>
                        <div class="body_item">
                            <div>
                                <?= $i->modelId; ?>
                            </div>
                            <div>
                                <?= $i->brandTitle; ?>
                            </div>
                            <div>
                                <?= $i->name; ?>
                            </div>
                        </div>
                    <? endforeach; ?>
                <? endif; ?>
            </div>
        </div>
    </div>
</div>
</body>
</html>