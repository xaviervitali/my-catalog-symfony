<?php

namespace App\Entity;

use App\Repository\PreferencesRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use ReflectionClass;
use ReflectionMethod;

#[ORM\Entity(repositoryClass: PreferencesRepository::class)]
class Settings
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $certification_gte = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $certification_lte = null;

    #[ORM\Column(length: 255)]
    private ?string $certification_country = null;

    #[ORM\Column(length: 10)]
    private ?string $language = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $primary_release_date_lte = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $primary_release_date_gte = null;

    #[ORM\Column(length: 10)]
    private ?string $region = null;

    #[ORM\Column(length: 255)]
    private ?string $sort_by = null;

    #[ORM\Column(nullable: true)]
    private ?string $vote_count_lte = null;

    #[ORM\Column(length: 10)]
    private ?string $watch_region = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $with_watch_monetization_types = null;

    #[ORM\Column(length: 255)]
    private ?string $with_watch_providers = null;


    #[ORM\Column(length: 255, nullable: true)]
    private ?string $without_genres = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $with_origin_country = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $with_runtime_gte = null;

    #[ORM\Column(length: 10, nullable: true)]
    private ?string $with_runtime_lte = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $vote_count_gte = null;

    #[ORM\OneToOne(inversedBy: 'settings', cascade: ['persist', 'remove'])]
    private ?User $user = null;

    public function getId(): ?int
    {
        return $this->id;
    }


    public function getCertificationGte(): ?string
    {
        return $this->certification_gte;
    }

    public function setCertificationGte(?string $certification_gte): static
    {
        $this->certification_gte = $certification_gte;

        return $this;
    }

    public function getCertificationLte(): ?string
    {
        return $this->certification_lte;
    }

    public function setCertificationLte(?string $certification_lte): static
    {
        $this->certification_lte = $certification_lte;

        return $this;
    }

    public function getCertificationCountry(): ?string
    {
        return $this->certification_country;
    }

    public function setCertificationCountry(string $certification_country): static
    {
        $this->certification_country = $certification_country;

        return $this;
    }

    public function getLanguage(): ?string
    {
        return $this->language;
    }

    public function setLanguage(string $language): static
    {
        $this->language = $language;

        return $this;
    }

    public function getPrimaryReleaseDateLte(): ?string
    {
        return $this->primary_release_date_lte;
    }

    public function setPrimaryReleaseDateLte(?string $primary_release_date_lte): static
    {
        $this->primary_release_date_lte = $primary_release_date_lte;

        return $this;
    }

    public function getPrimaryReleaseDateGte(): ?string
    {
        return $this->primary_release_date_gte;
    }

    public function setPrimaryReleaseDateGte(?string $primary_release_date_gte): static
    {
        $this->primary_release_date_gte = $primary_release_date_gte;

        return $this;
    }

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function setRegion(string $region): static
    {
        $this->region = $region;

        return $this;
    }

    public function getSortBy(): ?string
    {
        return $this->sort_by;
    }

    public function setSortBy(string $sort_by): static
    {
        $this->sort_by = $sort_by;

        return $this;
    }

    public function getVoteCountLte(): ?int
    {
        return $this->vote_count_lte;
    }

    public function setVoteCountLte(?int $vote_count_lte): static
    {
        $this->vote_count_lte = $vote_count_lte;

        return $this;
    }

    public function getWatchRegion(): ?string
    {
        return $this->watch_region;
    }

    public function setWatchRegion(string $watch_region): static
    {
        $this->watch_region = $watch_region;

        return $this;
    }

    public function getWithWatchMonetizationTypes(): ?string
    {
        return $this->with_watch_monetization_types;
    }

    public function setWithWatchMonetizationTypes(?string $with_watch_monetization_types): static
    {
        $this->with_watch_monetization_types = $with_watch_monetization_types;

        return $this;
    }

    public function getWithWatchProviders(): ?string
    {
        return $this->with_watch_providers;
    }

    public function setWithWatchProviders(string $with_watch_providers): static
    {
        $this->with_watch_providers = $with_watch_providers;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }

    public function getWithoutGenres(): ?string
    {
        return $this->without_genres;
    }

    public function setWithoutGenres(?string $without_genres): static
    {
        $this->without_genres = $without_genres;

        return $this;
    }

    public function getWithOriginCountry(): ?string
    {
        return $this->with_origin_country;
    }

    public function setWithOriginCountry(?string $with_origin_country): static
    {
        $this->with_origin_country = $with_origin_country;

        return $this;
    }

    public function getWithRuntimeGte(): ?string
    {
        return $this->with_runtime_gte;
    }

    public function setWithRuntimeGte(?string $with_runtime_gte): static
    {
        $this->with_runtime_gte = $with_runtime_gte;

        return $this;
    }

    public function getWithRuntimeLte(): ?string
    {
        return $this->with_runtime_lte;
    }

    public function setWithRuntimeLte(?string $with_runtime_lte): static
    {
        $this->with_runtime_lte = $with_runtime_lte;

        return $this;
    }

    public function getVoteCountGte(): ?string
    {
        return $this->vote_count_gte;
    }

    public function setVoteCountGte(?string $vote_count_gte): static
    {
        $this->vote_count_gte = $vote_count_gte;

        return $this;
    }
}
