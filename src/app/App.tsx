import './styles/index.scss'
import React, { Suspense, useState } from 'react'

import { useTheme } from 'app/providers/ThemeProvider'
import { classNames } from 'shared/lib/classNames/classNames'
import { AppRouter } from 'app/providers/router'
import { Navbar } from 'widgets/Navbar'
import { Sidebar } from 'widgets/Sidebar'

import 'shared/config/i18n/i18n'
import { Modal } from 'shared/ui/Modal/Modal'

const App = () => {
  const { theme } = useTheme()
  const [isOpen, setIsOpen] = useState(false)

  return (
    <div className={classNames('app', {}, [theme])}>
      <Suspense fallback="">
        <Navbar />
        <button
          onClick={() => {
            setIsOpen(true)
          }}
        >
          toggle
        </button>
        <Modal
          isOpen={isOpen}
          onClose={() => {
            setIsOpen(false)
          }}
        >
          <p>HI</p>
        </Modal>
        <div className="content-page">
          <Sidebar />
          <AppRouter />
        </div>
      </Suspense>
    </div>
  )
}

export default App
