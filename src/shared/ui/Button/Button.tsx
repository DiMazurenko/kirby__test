import { classNames } from 'shared/lib/classNames/classNames'
import cls from './Button.module.scss'
import React, { type ButtonHTMLAttributes, type FC } from 'react'

export enum ThemeButton {
  CLEAR = 'clear'
}

interface ButtonProps extends ButtonHTMLAttributes<HTMLButtonElement> {
  className?: string
  children: React.ReactNode
  theme?: ThemeButton
}

export const Button: FC<ButtonProps> = (props) => {
    const {
        className,
        children,
        theme,
        ...otherProps
    } = props

  return (
        <button
          className={classNames(cls.Button, {}, [className, cls[theme]])}
          {...otherProps}>
          {children}
      </button>
    );
}
