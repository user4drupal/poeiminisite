<?php

namespace Drupal\facets\Plugin\facets\widget;

use Drupal\Core\Form\FormStateInterface;
use Drupal\facets\FacetInterface;
use Drupal\facets\Widget\WidgetPluginBase;

/**
 * The dropdown widget.
 *
 * @FacetsWidget(
 *   id = "dropdown",
 *   label = @Translation("Dropdown"),
 *   description = @Translation("A configurable widget that shows a dropdown."),
 * )
 */
class DropdownWidget extends WidgetPluginBase {

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return [
      'default_option_label' => $this->t('Choose'),
    ] + parent::defaultConfiguration();
  }

  /**
   * {@inheritdoc}
   */
  public function build(FacetInterface $facet) {
    $build = parent::build($facet);
    $build['#attributes']['class'][] = 'js-facets-dropdown-links';
    $build['#attributes']['data-facet-default-option-label'] = $this->getConfiguration()['default_option_label'];
    $build['#attached']['library'][] = 'facets/drupal.facets.dropdown-widget';
    if (\Drupal::moduleHandler()->moduleExists('chosen')){
      chosen_attach_library($build);
    }
    return $build;
  }

  /**
   * {@inheritdoc}
   */
  public function buildConfigurationForm(array $form, FormStateInterface $form_state, FacetInterface $facet) {
    $config = $this->getConfiguration();

    $message = $this->t('This widget requires "Make sure only one result can be shown." to be enabled to behave as a standard dropdown.');
    $form['warning'] = [
      '#markup' => '<div class="messages messages--warning">' . $message . '</div>',
    ];

    $form += parent::buildConfigurationForm($form, $form_state, $facet);

    $form['default_option_label'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Default option label'),
      '#default_value' => $config['default_option_label'],
    ];

    return $form;
  }

}
