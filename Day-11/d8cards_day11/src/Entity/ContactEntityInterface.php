<?php

namespace Drupal\d8cards_day11\Entity;

use Drupal\Core\Entity\RevisionLogInterface;
use Drupal\Core\Entity\RevisionableInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface for defining Contact entity entities.
 *
 * @ingroup d8cards_day11
 */
interface ContactEntityInterface extends RevisionableInterface, RevisionLogInterface, EntityChangedInterface, EntityOwnerInterface {

  // Add get/set methods for your configuration properties here.

  /**
   * Gets the Contact entity name.
   *
   * @return string
   *   Name of the Contact entity.
   */
  public function getName();

  /**
   * Sets the Contact entity name.
   *
   * @param string $name
   *   The Contact entity name.
   *
   * @return \Drupal\d8cards_day11\Entity\ContactEntityInterface
   *   The called Contact entity entity.
   */
  public function setName($name);

  /**
   * Gets the Contact entity creation timestamp.
   *
   * @return int
   *   Creation timestamp of the Contact entity.
   */
  public function getCreatedTime();

  /**
   * Sets the Contact entity creation timestamp.
   *
   * @param int $timestamp
   *   The Contact entity creation timestamp.
   *
   * @return \Drupal\d8cards_day11\Entity\ContactEntityInterface
   *   The called Contact entity entity.
   */
  public function setCreatedTime($timestamp);

  /**
   * Returns the Contact entity published status indicator.
   *
   * Unpublished Contact entity are only visible to restricted users.
   *
   * @return bool
   *   TRUE if the Contact entity is published.
   */
  public function isPublished();

  /**
   * Sets the published status of a Contact entity.
   *
   * @param bool $published
   *   TRUE to set this Contact entity to published, FALSE to set it to unpublished.
   *
   * @return \Drupal\d8cards_day11\Entity\ContactEntityInterface
   *   The called Contact entity entity.
   */
  public function setPublished($published);

  /**
   * Gets the Contact entity revision creation timestamp.
   *
   * @return int
   *   The UNIX timestamp of when this revision was created.
   */
  public function getRevisionCreationTime();

  /**
   * Sets the Contact entity revision creation timestamp.
   *
   * @param int $timestamp
   *   The UNIX timestamp of when this revision was created.
   *
   * @return \Drupal\d8cards_day11\Entity\ContactEntityInterface
   *   The called Contact entity entity.
   */
  public function setRevisionCreationTime($timestamp);

  /**
   * Gets the Contact entity revision author.
   *
   * @return \Drupal\user\UserInterface
   *   The user entity for the revision author.
   */
  public function getRevisionUser();

  /**
   * Sets the Contact entity revision author.
   *
   * @param int $uid
   *   The user ID of the revision author.
   *
   * @return \Drupal\d8cards_day11\Entity\ContactEntityInterface
   *   The called Contact entity entity.
   */
  public function setRevisionUserId($uid);

}
