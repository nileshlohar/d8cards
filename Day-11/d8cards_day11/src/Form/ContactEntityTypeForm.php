<?php

namespace Drupal\d8cards_day11\Form;

use Drupal\Core\Entity\EntityForm;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class ContactEntityTypeForm.
 *
 * @package Drupal\d8cards_day11\Form
 */
class ContactEntityTypeForm extends EntityForm {

  /**
   * {@inheritdoc}
   */
  public function form(array $form, FormStateInterface $form_state) {
    $form = parent::form($form, $form_state);

    $contact_entity_type = $this->entity;
    $form['label'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Label'),
      '#maxlength' => 255,
      '#default_value' => $contact_entity_type->label(),
      '#description' => $this->t("Label for the Contact entity type."),
      '#required' => TRUE,
    ];

    $form['id'] = [
      '#type' => 'machine_name',
      '#default_value' => $contact_entity_type->id(),
      '#machine_name' => [
        'exists' => '\Drupal\d8cards_day11\Entity\ContactEntityType::load',
      ],
      '#disabled' => !$contact_entity_type->isNew(),
    ];

    /* You will need additional form elements for your custom properties. */

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function save(array $form, FormStateInterface $form_state) {
    $contact_entity_type = $this->entity;
    $status = $contact_entity_type->save();

    switch ($status) {
      case SAVED_NEW:
        drupal_set_message($this->t('Created the %label Contact entity type.', [
          '%label' => $contact_entity_type->label(),
        ]));
        break;

      default:
        drupal_set_message($this->t('Saved the %label Contact entity type.', [
          '%label' => $contact_entity_type->label(),
        ]));
    }
    $form_state->setRedirectUrl($contact_entity_type->toUrl('collection'));
  }

}
