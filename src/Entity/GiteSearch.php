<?php

namespace App\Entity;

class GiteSearch
{
  /**
   * @var int|null
   */
  private  $minSurface;
  /**
   * @var int|null
   */
  private  $minChambre;
  /**
   * @var int|null
   */
  private  $minCouchage;


  /**
   * @return int|null
   */
  public function getMinSurface(): ?int
  {
    return $this->minSurface;
  }

  /**
   * Set the value of minSurface
   *
   * @return  self
   */
  public function setMinSurface($minSurface)
  {
    $this->minSurface = $minSurface;

    return $this;
  }

  /**
   *  @return int|null
   */
  public function getMinChambre(): ?int
  {
    return $this->minChambre;
  }

  /**
   * Set the value of minChambre
   *
   * @return  self
   */
  public function setMinChambre($minChambre)
  {
    $this->minChambre = $minChambre;

    return $this;
  }

  /**
   *  @return int|null
   */
  public function getMinCouchage(): ?int
  {
    return $this->minCouchage;
  }

  /**
   * Set the value of minCouchage
   *
   * @return  self
   */
  public function setMinCouchage($minCouchage)
  {
    $this->minCouchage = $minCouchage;

    return $this;
  }
}
