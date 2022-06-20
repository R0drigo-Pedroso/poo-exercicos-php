<?php 

    namespace Biblioteca;

    class web extends Programacao {
        private array $formato = ["digital", "fisico"];
        

        /**
         * Get the value of formato
         *
         * @return array
         */
        public function getFormato(): string {
            return implode (',', $this->formato);
        }
        /**
         * Set the value of formato
         *
         * @param array $formato
         *
         * @return self
         */
        public function setFormato(array $formato): self
        {
                $this->formato = $formato;

                return $this;
        }
    }