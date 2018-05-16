<?php


namespace app\components\bootstrap4;

use yii\helpers\Html;

class Modal extends \yii\bootstrap\Modal
{

    public $verticallyCentered = false;

    /**
     * Initializes the widget.
     */
    public function init()
    {
        if (!isset($this->options['id'])) {
            $this->options['id'] = $this->getId();
        }

        $this->initOptions();

        echo $this->renderToggleButton() . "\n";
        echo Html::beginTag('div', $this->options) . "\n";
        echo Html::beginTag('div', ['class' => 'modal-dialog ' . $this->size . ' ' . ($this->verticallyCentered == true ? 'modal-dialog-centered' : '')]) . "\n";
        echo Html::beginTag('div', ['class' => 'modal-content']) . "\n";
        echo $this->renderHeader() . "\n";
        echo $this->renderBodyBegin() . "\n";
    }

    protected function renderHeader()
    {
        $button = $this->renderCloseButton();
        if ($button !== null) {
            $this->header = $this->header . "\n" . $button;
        }
        if ($this->header !== null) {
            Html::addCssClass($this->headerOptions, ['widget' => 'modal-header']);
            return Html::tag('div', "\n" . $this->header . "\n", $this->headerOptions);
        } else {
            return null;
        }
    }
}