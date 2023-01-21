<div class="sticky">
    <div class="horizontal-main hor-menu clearfix side-header">
        <div class="horizontal-mainwrapper container clearfix">
            <!--Nav-->
            <nav class="horizontalMenu clearfix">
                <ul class="horizontalMenu-list">
                    <li aria-haspopup="true">
                        <a href="{{route('dashboard')}}" class="">
                            <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/><path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/></svg>
                            Dashboard
                        </a>
                    </li>
                    <li aria-haspopup="true"><a href="#" class="sub-icon"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5H5v14h14V5zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" opacity=".3"/><path d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm2 0h14v14H5V5zm2 5h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z"/></svg> Master<i class="fe fe-chevron-down horizontal-icon"></i></a>
                        <ul class="sub-menu">
                            @if(in_array(auth()->user()->role, [\App\Constants\UserLevel::ADMIN, \App\Constants\UserLevel::OWNER, \App\Constants\UserLevel::PEGAWAI]))
                            <li aria-haspopup="true"><a href="{{route('type.index')}}" class="slide-item">Jenis</a></li>
                            <li aria-haspopup="true"><a href="{{route('unit.index')}}" class="slide-item">Satuan</a></li>
                            <li aria-haspopup="true"><a href="{{route('customer.index')}}" class="slide-item"> Customer</a></li>
                            <li aria-haspopup="true"><a href="{{route('product.index')}}" class="slide-item"> Barang</a></li>
                            <li aria-haspopup="true"><a href="{{route('service.index')}}" class="slide-item"> Jasa</a></li>
                            <li aria-haspopup="true"><a href="{{route('voucher.index')}}" class="slide-item"> Voucher</a></li>
                            <li aria-haspopup="true"><a href="{{route('sosmed.index')}}" class="slide-item"> Sosial Media</a></li>
                            @endif
                            @if(in_array(auth()->user()->role, [\App\Constants\UserLevel::ADMIN, \App\Constants\UserLevel::OWNER]))
                            <li aria-haspopup="true"><a href="{{route('supplier.index')}}" class="slide-item"> Supplier</a></li>
                            <li aria-haspopup="true"><a href="{{route('user.index')}}" class="slide-item">User</a></li>
                            <li aria-haspopup="true"><a href="{{route('employe.index')}}" class="slide-item">Pegawai</a></li>
                            <li aria-haspopup="true"><a href="{{route('profile.index')}}" class="slide-item"> Profile</a></li>

                            @endif
                        </ul>
                    </li>
                    <li aria-haspopup="true"><a href="#" class="sub-icon"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M3.31 11l2.2 8.01L18.5 19l2.2-8H3.31zM12 17c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z" opacity=".3"/><path d="M22 9h-4.79l-4.38-6.56c-.19-.28-.51-.42-.83-.42s-.64.14-.83.43L6.79 9H2c-.55 0-1 .45-1 1 0 .09.01.18.04.27l2.54 9.27c.23.84 1 1.46 1.92 1.46h13c.92 0 1.69-.62 1.93-1.46l2.54-9.27L23 10c0-.55-.45-1-1-1zM12 4.8L14.8 9H9.2L12 4.8zM18.5 19l-12.99.01L3.31 11H20.7l-2.2 8zM12 13c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg> Transaksi<i class="fe fe-chevron-down horizontal-icon"></i></a>
                        <ul class="sub-menu">
                            <li aria-haspopup="true"><a href="{{ route('purchase.index') }}" class="slide-item"> Pembelian</a></li>
                            <li aria-haspopup="true"><a href="{{route('sale.index')}}" class="slide-item">Penjualan</a></li>
                        </ul>
                    </li>
                    @if(in_array(auth()->user()->role, [\App\Constants\UserLevel::ADMIN, \App\Constants\UserLevel::OWNER, \App\Constants\UserLevel::PEGAWAI]))
                        @if(in_array(auth()->user()->role, [\App\Constants\UserLevel::ADMIN, \App\Constants\UserLevel::OWNER]))
                        <li aria-haspopup="true"><a href="{{route('kehadiran.index')}}" class=""><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M3.31 11l2.2 8.01L18.5 19l2.2-8H3.31zM12 17c-1.1 0-2-.9-2-2s.9-2 2-2 2 .9 2 2-.9 2-2 2z" opacity=".3"/><path d="M22 9h-4.79l-4.38-6.56c-.19-.28-.51-.42-.83-.42s-.64.14-.83.43L6.79 9H2c-.55 0-1 .45-1 1 0 .09.01.18.04.27l2.54 9.27c.23.84 1 1.46 1.92 1.46h13c.92 0 1.69-.62 1.93-1.46l2.54-9.27L23 10c0-.55-.45-1-1-1zM12 4.8L14.8 9H9.2L12 4.8zM18.5 19l-12.99.01L3.31 11H20.7l-2.2 8zM12 13c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z"/></svg> Kehadiran </a></li>
                        @endif
                        <li aria-haspopup="true"><a href="#" class="sub-icon"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0z" fill="none"/><path d="M12 4c-4.41 0-8 3.59-8 8s3.59 8 8 8c.28 0 .5-.22.5-.5 0-.16-.08-.28-.14-.35-.41-.46-.63-1.05-.63-1.65 0-1.38 1.12-2.5 2.5-2.5H16c2.21 0 4-1.79 4-4 0-3.86-3.59-7-8-7zm-5.5 9c-.83 0-1.5-.67-1.5-1.5S5.67 10 6.5 10s1.5.67 1.5 1.5S7.33 13 6.5 13zm3-4C8.67 9 8 8.33 8 7.5S8.67 6 9.5 6s1.5.67 1.5 1.5S10.33 9 9.5 9zm5 0c-.83 0-1.5-.67-1.5-1.5S13.67 6 14.5 6s1.5.67 1.5 1.5S15.33 9 14.5 9zm4.5 2.5c0 .83-.67 1.5-1.5 1.5s-1.5-.67-1.5-1.5.67-1.5 1.5-1.5 1.5.67 1.5 1.5z" opacity=".3"/><path d="M12 2C6.49 2 2 6.49 2 12s4.49 10 10 10c1.38 0 2.5-1.12 2.5-2.5 0-.61-.23-1.21-.64-1.67-.08-.09-.13-.21-.13-.33 0-.28.22-.5.5-.5H16c3.31 0 6-2.69 6-6 0-4.96-4.49-9-10-9zm4 13h-1.77c-1.38 0-2.5 1.12-2.5 2.5 0 .61.22 1.19.63 1.65.06.07.14.19.14.35 0 .28-.22.5-.5.5-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.14 8 7c0 2.21-1.79 4-4 4z"/><circle cx="6.5" cy="11.5" r="1.5"/><circle cx="9.5" cy="7.5" r="1.5"/><circle cx="14.5" cy="7.5" r="1.5"/><circle cx="17.5" cy="11.5" r="1.5"/></svg> Laporan<i class="fe fe-chevron-down horizontal-icon"></i></a>
                            <ul class="sub-menu">
                                
                                <li aria-haspopup="true"><a href="{{route('stok.index')}}" class="slide-item"> Stok Barang</a></li>
                                <li aria-haspopup="true"><a href="{{route('finance.index')}}" class="slide-item" >Keuangan</a></li>
                                @if(in_array(auth()->user()->role, [\App\Constants\UserLevel::ADMIN, \App\Constants\UserLevel::OWNER]))
                                <li aria-haspopup="true"><a href="{{route('attendance.index')}}" class="slide-item" >Kehadiran</a></li>
                                @endif
                            </ul>
                        </li>
                    @endif
                </ul>
            </nav>
            <!--Nav-->
        </div>
    </div>
</div>
