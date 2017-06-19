<?php

namespace Drupal\d8cards_day11;

use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Entity\EntityListBuilder;
use Drupal\Core\Link;

/**
 * Defines a class to build a listing of Contact entity entities.
 *
 * @ingroup d8cards_day11
 */
class ContactEntityListBuilder extends EntityListBuilder {


  /**
   * {@inheritdoc}
   */
  public function buildHeader() {
    $header['id'] = $this->t('Contact entity ID');
    $header['name'] = $this->t('Name');
    $header['email'] = $this->t('Email Address');
    $header['phone'] = $this->t('Telephone');
    $header['address'] = $this->t('Address');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity) {
    /* @var $entity \Drupal\d8cards_day11\Entity\ContactEntity */
    $row['id'] = $entity->id();
    $row['name'] = Link::createFromRoute(
      $entity->label(),
      'entity.contact_entity.edit_form',
      ['contact_entity' => $entity->id()]
    );
    $row['email'] = $entity->email->value;
    $row['phone'] = $entity->phone->value;
    $row['address'] = $entity->address->value;


    return $row + parent::buildRow($entity);
  }

}
