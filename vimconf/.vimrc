
call plug#begin('~/.vim/plugged')

Plug 'scrooloose/nerdtree', { 'on':  'NERDTreeToggle' }
Plug 'morhetz/gruvbox'
Plug 'wavded/vim-stylus',   { 'for': 'stylus'  }
Plug 'ctrlpvim/ctrlp.vim'
Plug 'vim-airline/vim-airline'
Plug 'jiangmiao/auto-pairs'
Plug 'Chiel92/vim-autoformat'
Plug 'mattn/emmet-vim', { 'for': ['html','xhtml','css','sass','scss','less']  }
au FileType html,css,sass,scss,less imap <expr><F4> emmet#expandAbbrIntelligent("\<tab>")
au FileType html,css,sass,scss,less imap <expr>jk   emmet#expandAbbrIntelligent("\<tab>")
au FileType html                    imap <C-\>      <CR><CR><Esc>ki<<Tab>
Plug 'scrooloose/syntastic'
Plug 'othree/html5.vim'
Plug 'pangloss/vim-javascript'
Plug 'digitaltoad/vim-pug'
Plug 'majutsushi/tagbar'
Plug 'tyru/open-browser.vim'
map <silent> <F5> :call BrowserPreview()<CR>
call plug#end()
set number
set encoding=utf-8
set expandtab
set tabstop=2

"Количество пробелов при нажатии клавиши tab:
set softtabstop=2

"Размер отступа при нажатии << и >> (в пробелах):
set shiftwidth=2

"Добавление отступа до первого непробельного символа с шириной равной
"shiftwidth:
set smarttab

"Сохранение отступа в новой строке от предыдущей:
set autoindent

"Включение умного отступа: 
set smartindent
set hlsearch
set incsearch
syntax on
colorscheme gruvbox
set background=dark
set showbreak=__

" Поддержка типов файлов:
filetype on

"Поддержка мыши
set mouse=a

"Показывать позицию курсора
set ruler

"Перенос строк:
set wrap

"Перенос длинных слов:
set linebreak

"Показывать строку состояния:
set laststatus=2

"Количество сохраненных команд в истории:
set history=1000

set showcmd

set statusline=%<%f%h%m%r%=format=%{&fileformat}\ file=%{&fileencoding}\ enc=%{&encoding}\ %b\ 0x%B\ %l,%c%V\ %P

"Показывать парные скобки:
set showmatch

"Использование системного буфера:
set clipboard=unnamed

set lcs=tab:>-,eol:<,nbsp:%
"mappings
map <C-n> :NERDTreeToggle<CR>
nmap <C-h> <C-w>w
vmap <C-y> "+y"
nmap j gj
nmap <DOWN> gj
nmap k gk
nmap <UP> gk
nmap <F8> :TagbarToggle<CR>
nmap <leader>l :set list!<CR>
